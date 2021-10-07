<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengujian;

class pengujian_allControler extends Controller
{
    //
    public function tampilkan()
    {
        $pengujian = pengujian::all();
        return view(
            'pengujian.show_all', ['pengujians' => $pengujian]
        );
    }
}
