<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\Spesialisasi;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


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

        $data=Dokter::with('getJadwal','getSpesialisasi')->where('id', $id)->get();
        $dokters= json_decode($data, true);
        
        // Menggunakan koleksi Laravel
        $collection = collect($dokters);

        // Mengelompokkan berdasarkan hari
        $jadwal   = $collection->map(function ($item) {
            // Mengelompokkan jadwal berdasarkan hari
            $jadwalGrouped = collect($item['get_jadwal'])->groupBy('hari');

            // Mengubah hasil menjadi array multi dimensi
            return [
                'id' => $item['id'],
                'spesialisId' => $item['spesialisId'],
                'userId' => $item['userId'],
                'namaDokter' => $item['namaDokter'],
                'get_spesialisasi' => $item['get_spesialisasi'],
                'get_jadwal' => $jadwalGrouped->map(function ($jadwals, $hari) {
                    return [
                        'hari' => $hari,
                        'jadwals' => $jadwals->map(function ($jadwal) {
                            return [
                                'id' => $jadwal['id'],
                                'dokterId' => $jadwal['dokterId'],
                                'start_time' => $jadwal['start_time'],
                                'end_time' => $jadwal['end_time']
                            ];
                        })->values()->all()
                    ];
                })->values()->all()
            ];
        })->values()->all();


            // Menampilkan hasil
            // return $jadwal;
        return view('frontend.jadwal-per-dokter', compact('jadwal'));
    }

    public function bookingDokter($id)
    {


        $data = Dokter::with('getJadwal', 'getSpesialisasi')->where('id', $id)->get();
        $dokters = json_decode($data, true);

        // Menggunakan koleksi Laravel
        $collection = collect($dokters);

        // Mengelompokkan berdasarkan hari dan menambahkan slot jam
        $jadwal = $collection->map(function ($item) {
            // Mengelompokkan jadwal berdasarkan hari
            $jadwalGrouped = collect($item['get_jadwal'])->groupBy('hari');

            // Mengubah hasil menjadi array multi dimensi dan menambahkan slot jam
            return [
                'id' => $item['id'],
                'spesialisId' => $item['spesialisId'],
                'userId' => $item['userId'],
                'namaDokter' => $item['namaDokter'],
                'get_spesialisasi' => $item['get_spesialisasi'],
                'get_jadwal' => $jadwalGrouped->map(function ($jadwals, $hari) {
                    return [
                        'hari' => $hari,
                        'jadwals' => $jadwals->map(function ($jadwal) {
                            // Membuat slot jam
                            $start = new DateTime($jadwal['start_time']);
                            $end = new DateTime($jadwal['end_time']);
                            $interval = new DateInterval('PT1H'); // Interval 1 jam
                            $period = new DatePeriod($start, $interval, $end);

                            // Menyimpan slot jam dalam array
                            $slots = [];
                            foreach ($period as $dt) {
                                $slots[] = $dt->format('H:i'); // Format waktu sesuai kebutuhan
                            }

                            return [
                                'id' => $jadwal['id'],
                                'dokterId' => $jadwal['dokterId'],
                                'start_time' => $jadwal['start_time'],
                                'end_time' => $jadwal['end_time'],
                                'slots' => $slots // Menambahkan slot jam
                            ];
                        })->values()->all()
                    ];
                })->values()->all()
            ];
        })->values()->all();

        // Menampilkan hasil
        return $jadwal;


        //  $data=Dokter::with('getSpesialisasi','getJadwal')->where('id', $id)->first();
        // $return $data;
        //  $praktek= $data->getJadwal;
        // $jam= json_decode($praktek, true);
        //  $collection=collect($jam);
        // //  return $collection;

        //  // Mengelompokkan berdasarkan hari
        // $groupedByDay = $collection->groupBy('hari');
        
        // $result = [];
        // foreach ($groupedByDay as $day => $schedules) {
        //     $result[$day] = [];
        //     foreach ($schedules as $schedule) {
        //         $start = new DateTime($schedule['start_time']);
        //         $end = new DateTime($schedule['end_time']);
        //         $interval = new DateInterval('PT1H'); // Interval 1 jam
        //         $period = new DatePeriod($start, $interval, $end);

        //         foreach ($period as $dt) {
        //             $result[$day][] = $dt->format('H:i'); // Format waktu sesuai kebutuhan
        //         }
        //     }
        // }

        // return $result;

        // Membuat slot jam
        // $timeSlots = makeTimeSlots($data);

        // // Menampilkan hasil
        // print_r($timeSlots);

        // $start_time = "10:00:00";
        // $end_time = "15:00:00";
        // $start = new DateTime($start_time);
        // $end = new DateTime($end_time);
        // $interval = new DateInterval('PT1H'); // Interval 1 jam
        // $period = new DatePeriod($start, $interval, $end);

        // $slots = [];
        // foreach ($period as $dt) {
        //     $slots[] = $dt->format('H:i'); // Format waktu sesuai kebutuhan
        // }

        // return $slots;
    }
}
