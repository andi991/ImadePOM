<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penindakan;

class penindakan_all2Controler extends Controller
{
    public function tampilkan()
    {
        $penindakan = penindakan::all();
        return view(
            'penindakan.show_all', ['penindakans' => $penindakan]
        );
    }
}
