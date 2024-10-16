<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\Spesialisasi;
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
}
