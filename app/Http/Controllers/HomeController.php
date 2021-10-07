<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemeriksaan;
use App\Models\pengujian;
use App\Models\penindakan;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlahpemeriksaan = pemeriksaan::count();
        $jumlahpenindakan = penindakan::count();
        $jumlahpengujian = pengujian::count();
        $jumlahuser = user::count();
        
        return view('home', ['jumlahpemeriksaan'=>$jumlahpemeriksaan, 'jumlahuser'=>$jumlahuser, 'jumlahpenindakan'=>$jumlahpenindakan, 'jumlahpengujian'=>$jumlahpengujian], );
    }
}
