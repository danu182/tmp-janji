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
        return $id;
        $dokter= Dokter::find($id);
        return view('frontend.detail-poli', compact('dokter'));
    }
}
