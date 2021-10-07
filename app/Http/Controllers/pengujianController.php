<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengujian;

class pengujianController extends Controller
{

    public function index()
    {
        $pengujians = pengujian::latest()->paginate(10);

        $jumlahpengujian = pengujian::count();
        $sudahdiuji = pengujian::where('status', 'Sudah Diuji')->count();
        $akandiuji = pengujian::where('status', 'Akan Diuji')->count();
        $belumdiuji = pengujian::where('status', 'Belum Diuji')->count();

        return view(
            'pengujian.index', ['jumlahpengujian'=>$jumlahpengujian, 'sudahdiuji'=>$sudahdiuji, 'akandiuji'=>$akandiuji, 'belumdiuji'=>$belumdiuji], compact('pengujians')
        )
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('pengujian.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'no_surat_tugas' => 'required',
                'nama_petugas' => 'required',
                'jenis_sarana' => 'required',
                'status' => 'required'
        ]);

        pengujian::create($request->all());
        
        //redirect jika sukses menyimpan data
        return redirect()->route('pengujian.index')
            ->with('success','Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pengujian $pengujian)
    {
        //menampilkan data berdasarkan id
        return view('pengujian.show', compact('pengujian'));
    }

    public function edit(pengujian $pengujian)
    {
        //edit data berdasarkan id yang dipilih
        return view('pengujian.edit', compact('pengujian'));
    }


    public function update(Request $request, pengujian $pengujian)
    {
        //validasi isi data
        $request->validate(
            [
                'no_surat_tugas' => 'required',
                'nama_petugas' => 'required',
                'jenis_sarana' => 'required',
                'status' => 'required'
        ]);

        $pengujian->update($request->all());

        return redirect()->route('pengujian.index')
            ->with('success', 'Data updated successfully');
    }

    public function destroy(pengujian $pengujian)
    {
        //

        $pengujian->delete();
        
        return redirect()->route('pengujian.index')
            ->with('success','Data deleted successfully');
    }

    public function tampilkanSudahDiuji()
    {
        $pengujian = pengujian::where('status', 'Sudah Diuji')->get();
        return view(
            'pengujian.showSudahDiuji', ['pengujians' => $pengujian]
        );
    }

    public function cetakSudahDiuji()
    {
        $pengujian = pengujian::where('status', 'Sudah Diuji')->get();
        return view(
            'pengujian.cetakSudahDiuji', ['pengujians' => $pengujian]
        );
    }

    public function tampilkanAkanDiuji()
    {
        $pengujian = pengujian::where('status', 'Akan Diuji')->get();
        return view(
            'pengujian.showAkanDiuji', ['pengujians' => $pengujian]
        );
    }

    public function cetakAkanDiuji()
    {
        $pengujian = pengujian::where('status', 'Akan Diuji')->get();
        return view(
            'pengujian.cetakAkanDiuji', ['pengujians' => $pengujian]
        );
    }

    public function tampilkanBelumDiuji()
    {
        $pengujian = pengujian::where('status', 'Belum Diuji')->get();
        return view(
            'pengujian.showBelumDiuji', ['pengujians' => $pengujian]
        );
    }

    public function cetakBelumDiuji()
    {
        $pengujian = pengujian::where('status', 'Belum Diuji')->get();
        return view(
            'pengujian.cetakBelumDiuji', ['pengujians' => $pengujian]
        );
    }

}
