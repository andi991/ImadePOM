<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temuanPenindakan;
use App\Models\penindakan;

class temuanPenindakanController extends Controller
{
   

    public function index()
    {
        //menampilkan data berdasarkan id
        $temuan = temuanPenindakan::all();
        return view('penindakan.showTemuan'  ,compact('temuan'));

    }

    public function edit(temuanPenindakan $temuan)
    {
        
        //edit data berdasarkan id yang dipilih
        $penindakans = penindakan::all();
        return view('penindakan.editTemuan' ,compact('temuan', 'penindakans'));
    }

    public function update(Request $request, temuanPenindakan $temuan)
    {
        //validasi isi data
        $request->validate(
            [
                'nama_produk'=>'required',
                'bentuk'=>'required',
                'produsen'=>'required',
            ]);
        //mengubah data berdasarkan request dan parameter yang dikirimkan
        $temuan->update($request->all());

        
        return redirect()->route('penindakan.index')
            ->with('success','Data updated successfully');
    }

}
