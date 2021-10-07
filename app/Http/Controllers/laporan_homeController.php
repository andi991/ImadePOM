<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemeriksaan;
use App\Models\pengujian;
use App\Models\penindakan;
use App\Models\User;


class laporan_homeController extends Controller
{
    public function index()
    {
        $pemeriksaans = pemeriksaan::latest()->paginate(5);
        $penindakans = penindakan::latest()->paginate(5);
        $pengujians = pengujian::latest()->paginate(5);

        $jumlahpemeriksaan = pemeriksaan::count();
        $jumlahpenindakan = penindakan::count();
        $jumlahpengujian = pengujian::count();
        
        return view('laporan_home', ['jumlahpemeriksaan'=>$jumlahpemeriksaan, 'jumlahpenindakan'=>$jumlahpenindakan, 'jumlahpengujian'=>$jumlahpengujian, 'pemeriksaans'=>$pemeriksaans, 'pengujians'=>$pengujians, 'penindakans'=>$penindakans] )
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
