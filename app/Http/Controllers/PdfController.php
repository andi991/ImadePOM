<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function print()
    {
    $pdf = PDF::loadview('showHasilPemeriksaan')->setPaper('A4','potrait');
    return $pdf->stream();
    }
}
