<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemeriksaan;

class pemeriksaanController extends Controller
{

    public function index()
    {
        // mengambil data terakhir 5 list
        $pemeriksaans = pemeriksaan::latest()->paginate(5);

        return view(
            'pemeriksaan.index',compact('pemeriksaans')
        )
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        //menampilkan halaman create
        return view('pemeriksaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi untuk isi dan data wajib isi
        $request->validate(
            [
                'nama' => 'required',
                'no_surat' => 'required',
                'nama_sarana' => 'required',
                'telepon' => 'required',
                'penanggungjawab' => 'required',
        ]);

        /// insert setiap request dari form ke dalam database via model
        pemeriksaan::create($request->all());

        /// redirect jika sukses menyimpan data
        return redirect()->route('pemeriksaan.index')
            ->with('success','Data created successfully');
    }


    public function show(pemeriksaan $pemeriksaan)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        return view('pemeriksaan.show'  ,compact('pemeriksaan'));
    }

    public function edit(pemeriksaan $pemeriksaan)
    {
        ///edit post berdasarkan id yang dipilh
        ///href="{{ route('pemeriksaan.edit',$pemeriksaan->id) }};
        return view('pemeriksaan.edit' ,compact('pemeriksaan'));
    }

    public function update(Request $request, pemeriksaan $pemeriksaan)
    {
        ///membuat validasi untuk isi data
        $request->validate(
            [
                'nama' => 'required',
                'no_surat' => 'required',
                'nama_sarana' => 'required',
                'telepon' => 'required',
                'penanggungjawab' => 'required',
        ]);

        ///mengubah data berdasarkan request dan parameter yang dikirimkan
        $pemeriksaan->update($request->all());

        return redirect()->route('pemeriksaan.index')
            ->with('success','Data updated successfully');

    }


    public function destroy(pemeriksaan $pemeriksaan)
    {
        // melakukan hapus data berdasarkan parameter yang dikirimkan
        $pemeriksaan->delete();

        return redirect()->route('pemeriksaan.index')
            ->with('success','Data deleted successfully');
    }
}
