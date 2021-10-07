<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pemeriksaan;
use PDF;

class penindakan_allControler extends Controller
{
    public function tampilkan()
    {
        $pemeriksaan = pemeriksaan::all();
        return view(
            'pemeriksaan.show_all', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function tampilkanMK()
    {
        $pemeriksaan = pemeriksaan::where('kategori_temuan', 'Memenuhi Ketentuan')->get();
        return view(
            'pemeriksaan.showMK', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function cetakMK()
    {
        $pemeriksaan = pemeriksaan::where('kategori_temuan', 'Memenuhi Ketentuan')->get();
        return view(
            'pemeriksaan.cetakMK', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function tampilkanTMK()
    {
        $pemeriksaan = pemeriksaan::where('kategori_temuan', 'Tidak Memenuhi Ketentuan')->get();
        return view(
            'pemeriksaan.showTMK', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function cetakTMK()
    {
        $pemeriksaan = pemeriksaan::where('kategori_temuan', 'Tidak Memenuhi Ketentuan')->get();
        return view(
            'pemeriksaan.cetakTMK', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function tampilkanPembinaan()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Pembinaan')->get();
        return view(
            'pemeriksaan.showPembinaan', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function cetakPembinaan()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Pembinaan')->get();
        return view(
            'pemeriksaan.cetakPembinaan', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function tampilkanPeringatan()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Peringatan')->get();
        return view(
            'pemeriksaan.showPeringatan', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function cetakPeringatan()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Peringatan')->get();
        return view(
            'pemeriksaan.cetakPeringatan', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function tampilkanPeringatanKeras()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Peringatan Keras')->get();
        return view(
            'pemeriksaan.showPeringatanKeras', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function cetakPeringatanKeras()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Peringatan Keras')->get();
        return view(
            'pemeriksaan.cetakPeringatanKeras', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function tampilkanHasilPemeriksaan()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Hasil Pemeriksaan')->get();
        return view(
            'pemeriksaan.showHasilPemeriksaan', ['pemeriksaans' => $pemeriksaan]
        );
    }

    public function cetakHasilPemeriksaan()
    {
        $pemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Hasil Pemeriksaan')->get();
        return view(
            'pemeriksaan.cetakHasilPemeriksaan', ['pemeriksaans' => $pemeriksaan]
        );
    }
    

    public function cari(Request $request)
	{
		$keyword = $request->search;
        $pemeriksaans = pemeriksaan::where('nama_sarana', 'like', "%" . $keyword . "%");
        return view(
            'pemeriksaan.show_all', compact('pemeriksaans')
        );
 
	}


}
