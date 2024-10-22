<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\Perjanjian;
use App\Models\Spesialisasi;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PhpParser\Node\Stmt\Return_;

use function App\Helpers\formatHari;
use function App\Helpers\generateTimeSlots;

class HomeController extends Controller
{
    public function index()
    {
        $spesialis= Spesialisasi::all();
        return view('frontend.index', compact('spesialis'));
    }

    public function detailPoli($id)
    {
        $dokter= Spesialisasi::with('getDokter')->where('id', $id)->get();
        return view('frontend.detail-poli', compact('dokter'));
    }

    public function jadwalDokter($id)
    {

        $dokter=Dokter::with('getJadwal','getSpesialisasi')->where('id', $id)->first();
        // $dokters= json_decode($data, true);

        $jadwalKelompok = $dokter->getJadwal->groupBy('hari');

        return view('frontend.jadwal-per-dokter', compact('dokter','jadwalKelompok'));
    
    }


    
    function generateTimeSlots($startTime, $endTime, $interval = 60) 
    {
        $slots = [];
        $start = Carbon::createFromFormat('H:i:s', $startTime);
        $end = Carbon::createFromFormat('H:i:s', $endTime);

        while ($start < $end) {
            $slots[] = $start->format('H:i:s');
            $start->addMinutes($interval);
        }

        return $slots;
    }

    public function bookingDokter($id)
    {
        $dokter = Dokter::with(['getJadwal', 'getSpesialisasi'])->find($id);
        $jadwalKelompok = $dokter->getJadwal->groupBy('hari');

        // Menyimpan slot waktu
        $jadwalDenganSlot = [];

        foreach ($jadwalKelompok as $hari => $jadwals) {
            foreach ($jadwals as $jadwal) {
                $slots = generateTimeSlots($jadwal->start_time, $jadwal->end_time);
                $jadwalDenganSlot[$hari][] = [
                    'start_time' => $jadwal->start_time,
                    'end_time' => $jadwal->end_time,
                    'slots' => $slots,
                ];
            }
        }


        return view('frontend.appoinment', compact('dokter','jadwalDenganSlot'));

    }

    public function cekHari(Request $request)
    {
        
        $request->validate([
            'tanggal' => 'required|date', // Ensure 'tanggal' is a valid date
        ]);

        $tanggal = $request->tanggal;
        $hari= formatHari($tanggal);
        // return response()->json(['hari' => $hari]);

    }

    public function AmbilSlotJam(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date', // Ensure 'tanggal' is a valid date
            'dokterId' => 'required|string',
        ]);

        $tanggal = $request->tanggal;
        
        // Format hari dari tanggal
        $hari = formatHari($tanggal);

        // Ambil ID dokter
        $kodeDokter = $request->dokterId;

        // Fetch the slots based on the day and doctor ID
        $slots = JadwalDokter::where('hari', $hari)
            ->where('dokterId', $kodeDokter)
            ->get();

        $timeSlots = [];

        foreach ($slots as $schedule) {
            $startTime = Carbon::createFromFormat('H:i:s', $schedule['start_time']);
            $endTime = Carbon::createFromFormat('H:i:s', $schedule['end_time']);

            while ($startTime < $endTime) {
                $slotStart = $startTime->format('H:i');
                $slotEnd = $startTime->copy()->addHour()->format('H:i');
                
                $timeSlots[] = [
                    'hari' => $schedule['hari'],
                    'start_time' => $slotStart,
                    'end_time' => $slotEnd,
                ];
                
                $startTime->addHour();
            }
        }

        // Return the slots as a JSON response
        // return response()->json([
        //     'timeSlots' => $timeSlots,
        //     'hari' => $hari,
        // ]);

        // $JamTerisi=Perjanjian::where('tanggalperjanjian',$tanggal)->where('jamPerjanjian',$timeSlots)->where('doctorId',$kodeDokter)->get();
        
        // Ambil jam yang terisi dari tabel Perjanjian
         $jamTerisi = Perjanjian::where('tanggalperjanjian', $tanggal)
            ->where('doctorId', $kodeDokter)
            ->pluck('jamPerjanjian')
            ->toArray();

        // Filter slot waktu yang tidak terisi
         $availableSlots = array_filter($timeSlots, function ($slot) use ($jamTerisi) {
            return !in_array($slot['start_time'], $jamTerisi);
        });


        // Kembalikan slot yang tersedia sebagai response JSON
        return response()->json([
            'timeSlots' => $availableSlots,
            'hari' => $hari,
        ]);
    }

    // public function getSlotJadwal(Request $request)
    // {
    //     // Validate the request to ensure 'hari' is provided
    //     $request->validate([
    //         'hari' => 'required|string', // Ensure 'hari' is provided and is a string
    //     ]);

    //     $hari = $request->hari;

    //     // Fetch the slots based on the day
    //     $slot = JadwalDokter::where('hari', $hari)->where('dokterId',1)->get();

    //     // Return the slots as a JSON response
    //     return response()->json(['slot' => $slot]);
    // }


    public function coba_get()
    {
       return view('coba');
    }

    public function test(Request $request)
    {
         $request->validate([
            'dokterId'=>'required|exists:dokters,id',
            'name'=>'required|exists:users,name',
            'email'=>'required|email|exists:users,email',
            'Nip'=>'required|exists:users,nip',
            'namaDokter'=>'required|exists:dokters,namaDokter',
            'tanggal' => 'required|date', // Ensure 'tanggal' is a valid date
            'slot' => 'required', // Ensure 'tanggal' is a valid date
        ]);


        return $request->all();
    }

    



    

}
