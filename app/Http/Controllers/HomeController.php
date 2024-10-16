<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialisasi;
use Illuminate\Http\Request;

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

        
        // return $dokter;

        return view('frontend.detail-poli', compact('dokter'));
    }
}
