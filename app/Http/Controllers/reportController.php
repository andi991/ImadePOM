<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemeriksaan;

class reportController extends Controller
{
    public function index()
    {   
        $jumlahpemeriksaan = pemeriksaan::count();
        
        return view(
            'report', ['jumlahpemeriksaan'=>$jumlahpemeriksaan, ], compact('reports')
        );
    }
}
