<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penindakan;
use App\Models\temuanPenindakan;
use Dompdf\Cpdf;

class penindakanController extends Controller
{

    public function index()
    {
        //mengambil data terakhir 10 list
        $penindakans = penindakan::with('temuan')->paginate(10);

        //menghitung data
        $jumlahpenindakan = penindakan::count();
        $sudahditindak = penindakan::where('status', 'Tetap')->count();
        $akanditindak = penindakan::where('status', 'Dikeluarkan')->count();
        $belumditindak = penindakan::where('status', 'Belum Ditindak')->count();
        
        //menampilkan index
        return view(
            'penindakan.index', ['jumlahpenindakan'=>$jumlahpenindakan, 'sudahditindak'=>$sudahditindak, 'akanditindak'=>$akanditindak, 'belumditindak'=>$belumditindak], compact('penindakans')
        )
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('penindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi data
        $request->validate(
            [
                'no_surat_tugas'=>'required',
                'no_lhp'=>'required',
                'nama_sarana'=>'required',
                'alamat'=>'required',
                'telepon'=>'required',
                'pemilik'=>'required',
                'golongan'=>'required',
                'uraian_temuan'=>'required',
                'kategori_temuan'=>'required',
                'tindak_lanjut'=>'required',
            ]);
        //insert setiap request dari form ke dalam database
        penindakan::create($request->all());
        
        //redirect jika sukses menyimpan data
        return redirect()->route('penindakan.index')
            ->with('success','Data created successfully');
    }


    public function show(penindakan $penindakan)
    {
        //menampilkan data berdasarkan id

        return view('penindakan.show'  ,compact('penindakan'));

    }

    
    
    //public function show_all(penindakan $penindakan)
    //{
    //    $penindakan_all = penindakan::get();
    //    return view(
    //        'penindakan.show_all', compact('penindakan_all')
    //    );
    //}


    public function edit(penindakan $penindakan)
    {
        //edit data berdasarkan id yang dipilih
        return view('penindakan.edit' ,compact('penindakan'));
    }

    public function update(Request $request, penindakan $penindakan)
    {
        //validasi isi data
        $request->validate(
            [
                'no_surat_tugas'=>'required',
                'no_lhp'=>'required',
                'nama_sarana'=>'required',
                'alamat'=>'required',
                'telepon'=>'required',
                'pemilik'=>'required',
                'golongan'=>'required',
                'uraian_temuan'=>'required',
                'kategori_temuan'=>'required',
                'tindak_lanjut'=>'required',
            ]);
        //mengubah data berdasarkan request dan parameter yang dikirimkan
        $penindakan->update($request->all());

        return redirect()->route('penindakan.index')
            ->with('success','Data updated successfully');
    }


    public function destroy(penindakan $penindakan)
    {
        
        $penindakan->delete();

        return redirect()->route('penindakan.index')
            ->with('success','Data deleted successfully');
    }

    public function tampilkanSudahDitindak()
    {
        $penindakan = penindakan::where('status', 'Tetap')->get();
        return view(
            'penindakan.showSudahDitindak', ['penindakans' => $penindakan]
        );
    }

    public function cetakSudahDitindak()
    {
        $penindakan = penindakan::where('status', 'Dikeluarkan')->get();
        return view(
            'penindakan.cetakSudahDitindak', ['penindakans' => $penindakan]
        );
    }

    public function tampilkanAkanDitindak()
    {
        $penindakan = penindakan::where('status', 'Akan Ditindak')->get();
        return view(
            'penindakan.showAkanDitindak', ['penindakans' => $penindakan]
        );
    }

    public function cetakAkanDitindak()
    {
        $penindakan = penindakan::where('status', 'Akan Ditindak')->get();
        return view(
            'penindakan.cetakAkanDitindak', ['penindakans' => $penindakan]
        );
    }

    public function tampilkanBelumDitindak()
    {
        $penindakan = penindakan::where('status', 'Belum Ditindak')->get();
        return view(
            'penindakan.showBelumDitindak', ['penindakans' => $penindakan]
        );
    }

    public function cetakBelumDitindak()
    {
        $penindakan = penindakan::where('status', 'Belum Ditindak')->get();
        return view(
            'penindakan.cetakBelumDitindak', ['penindakans' => $penindakan]
        );
    }

    public function tambahTemuan()
    {
        $penindakans = penindakan::all();
        return view('penindakan.create_temuan' ,compact('penindakans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function temuanStore(Request $request)
    {

        //membuat validasi data
        $request->validate(
            [

                'nama_produk'=>'required',
                'bentuk'=>'required',
                'produsen'=>'required',
            ]);
        //insert setiap request dari form ke dalam database
        temuanPenindakan::create($request->all());
        
        //redirect jika sukses menyimpan data
        return redirect()->route('penindakan.index')
            ->with('success','Data created successfully');
    }

    public function temuan(){
        $temuan = temuanPenindakan::all();
        $penindakan = penindakan::all();
        return view('penindakan.tampilkanTemuan',compact('temuan','penindakan'));
      }
}
