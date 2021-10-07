<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pemeriksaan;

class pemeriksaanController extends Controller
{

    public function index()
    {
        // mengambil data terakhir 5 list
        $pemeriksaans = pemeriksaan::latest()->paginate(10);

        //menghitung data
        //$jumlahpemeriksaan = pemeriksaan::table('kabupaten')
        //    ->selectRaw('count(*) as total')
        //    ->selectRaw("count(case when status = 'Buleleng' then 1 end) as sudah_diperiksa")
        //    ->selectRaw("count(case when status = 'Jembrana' then 1 end) as belum_diperiksa")
        //    ->first();
        $jumlahpemeriksaan = pemeriksaan::count();
        $sudahdiperiksa = pemeriksaan::where('status', 'Sudah Diperiksa')->count();
        $akandiperiksa = pemeriksaan::where('status', 'Akan Diperiksa')->count();
        $belumdiperiksa = pemeriksaan::where('status', 'Belum Diperiksa')->count();
        $mk = pemeriksaan::where('kategori_temuan', 'Memenuhi Ketentuan')->count();
        $tmk = pemeriksaan::where('kategori_temuan', 'Tidak Memenuhi Ketentuan')->count();
        $pembinaan = pemeriksaan::where('kategori_tindak_lanjut', 'Pembinaan')->count();
        $peringatan = pemeriksaan::where('kategori_tindak_lanjut', 'Peringatan')->count();
        $peringatankeras = pemeriksaan::where('kategori_tindak_lanjut', 'Peringatan Keras')->count();
        $hasilpemeriksaan = pemeriksaan::where('kategori_tindak_lanjut', 'Hasil Pemeriksaan')->count();

        return view(
            'pemeriksaan.index', ['jumlahpemeriksaan'=>$jumlahpemeriksaan, 'sudahdiperiksa'=>$sudahdiperiksa, 'akandiperiksa'=>$akandiperiksa, 'belumdiperiksa'=>$belumdiperiksa, 'mk'=>$mk, 'tmk'=>$tmk, 'pembinaan'=>$pembinaan, 'peringatan'=>$peringatan, 'peringatankeras'=>$peringatankeras, 'hasilpemeriksaan'=>$hasilpemeriksaan], compact('pemeriksaans')
        )
        ->with('i', (request()->input('page', 1) - 1) * 10);
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
                'nama_petugas' => 'required',
                'nama_sarana' => 'required',
                'jenis_sarana' => 'required',
                'status' => 'required'
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
                'nama_petugas' => 'required',
                'nama_sarana' => 'required',
                'jenis_sarana' => 'required',
                'status' => 'required'
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

    public function search(Request $request)
    {
        $keyword = $request->search;
        $pemeriksaans = pemeriksaan::where('nama_sarana', 'like', "%" . $keyword . "%")->paginate(10);
        
        $jumlahpemeriksaan = pemeriksaan::count();
        $sudahdiperiksa = pemeriksaan::where('status', 'Sudah Diperiksa')->count();
        $akandiperiksa = pemeriksaan::where('status', 'Akan Diperiksa')->count();
        $belumdiperiksa = pemeriksaan::where('status', 'Belum Diperiksa')->count();
        $mk = pemeriksaan::where('kategori_temuan', 'Memenuhi Ketentuan')->count();
        $tmk = pemeriksaan::where('kategori_temuan', 'Tidak Memenuhi Ketentuan')->count();

        return view(
            'pemeriksaan.index', ['jumlahpemeriksaan'=>$jumlahpemeriksaan, 'sudahdiperiksa'=>$sudahdiperiksa, 'akandiperiksa'=>$akandiperiksa, 'belumdiperiksa'=>$belumdiperiksa, 'mk'=>$mk, 'tmk'=>$tmk], compact('pemeriksaans')
        )
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
