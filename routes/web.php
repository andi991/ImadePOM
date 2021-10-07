<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pemeriksaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\laporan_homeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\pengujian_allControler;
use App\Http\Controllers\pengujianController;
use App\Http\Controllers\penindakan_all2Controler;
use App\Http\Controllers\penindakanController;
use App\Http\Controllers\penindakan_allControler;
use App\Http\Controllers\temuanPenindakanController;
use App\Models\penindakan;
use App\Models\temuanPenindakan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aragon', function () {
    return view('dashboard');
});

//Route::get('/pemeriksaan', function()
//    {return view('pemeriksaan');
//});

//Route::get('/penindakan', function()
//    {return view('penindakan');
//});

Route::get('/infokom', function()
    {return view('infokom');
});

//Route::get('/pengujian', function()
//    {return view('pengujian');
//});

Route::get('/tatausaha', function()
    {return view('tatausaha');
});

Route::get('/laporan', function()
    {return view('laporan');
});

Route::get('/tambah', function()
    {return view('tambah');
});

Route::get('/tambah-penindakan', function()
    {return view('tambah_penindakan');
});

Route::get('/tambah-pengujian', function()
    {return view('tambah_pengujian');
});

Route::get('/chage-password', function()
    {return view('chage_password');
});

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

//Route::get('home', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Auth::routes();
Route::group(['middleware' => 'auth','ceklevel:admin,user'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    //Route::get('welcome', [HomeController::class, 'welcome'])->name('home');
    //Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});

//Controller Setiap Fungsi Utama
Route::resource('pemeriksaan', pemeriksaanController::class);
Route::resource('penindakan', penindakanController::class);
Route::resource('pengujian', pengujianController::class);
Route::resource('temuan', temuanPenindakanController::class);

//controller tambahan pemeriksaan
Route::get('/pemeriksaan-all', [penindakan_allControler::class, 'tampilkan']);
Route::get('/pemeriksaan-mk', [penindakan_allControler::class, 'tampilkanMK']);
Route::get('/pemeriksaan-tmk', [penindakan_allControler::class, 'tampilkanTMK']);
Route::get('/pemeriksaan-pembinaan', [penindakan_allControler::class, 'tampilkanPembinaan']);
Route::get('/pemeriksaan-peringatan', [penindakan_allControler::class, 'tampilkanPeringatan']);
Route::get('/pemeriksaan-peringatan-keras', [penindakan_allControler::class, 'tampilkanPeringatanKeras']);
Route::get('/pemeriksaan-hasil-pemeriksaan', [penindakan_allControler::class, 'tampilkanHasilPemeriksaan']);
Route::get('/print', [penindakan_allControler::class, 'print']);
Route::get('/cetak-mk', [penindakan_allControler::class, 'cetakMK']);
Route::get('/cetak-tmk', [penindakan_allControler::class, 'cetakTMK']);
Route::get('/cetak-pembinaan', [penindakan_allControler::class, 'cetakPembinaan']);
Route::get('/cetak-peringatan', [penindakan_allControler::class, 'cetakPeringatan']);
Route::get('/cetak-peringatan-keras', [penindakan_allControler::class, 'cetakPeringatanKeras']);
Route::get('/cetak-hasil-pemeriksaan', [penindakan_allControler::class, 'cetakHasilPemeriksaan']);

//controller tambahan pengujian
Route::get('/pengujian-all', [pengujian_allControler::class, 'tampilkan']);
Route::get('/pengujian-sudah-diuji', [pengujianController::class, 'tampilkanSudahDiuji']);
Route::get('/pengujian-akan-diuji', [pengujianController::class, 'tampilkanAkanDiuji']);
Route::get('/pengujian-belum-diuji', [pengujianController::class, 'tampilkanBelumDiuji']);
Route::get('/cetak-sudah-diuji', [pengujianController::class, 'cetakSudahDiuji']);
Route::get('/cetak-akan-diuji', [pengujianController::class, 'cetakAkanDiuji']);
Route::get('/cetak-belum-diuji', [pengujianController::class, 'cetakBelumDiuji']);

//controller tambahan penindakan
Route::get('/penindakan-all', [penindakan_all2Controler::class, 'tampilkan']);
Route::get('/penindakan-sudah-ditindak', [penindakanController::class,'tampilkanSudahDitindak']);
Route::get('/penindakan-akan-ditindak', [penindakanController::class,'tampilkanAkanDitindak']);
Route::get('/penindakan-belum-ditindak', [penindakanController::class,'tampilkanBelumDitindak']);
Route::get('/cetak-sudah-ditindak', [penindakanController::class,'cetakSudahDitindak']);
Route::get('/cetak-akan-ditindak', [penindakanController::class,'cetakAkanDitindak']);
Route::get('/cetak-belum-ditindak', [penindakanController::class,'cetakBelumDitindak']);
Route::get('/tambah-temuan', [penindakanController::class,'tambahTemuan']);
Route::post('/store-temuan', [penindakanController::class,'temuanStore']);

//Route::get('/pemeriksaan-cari', [penindakan_allControler::class, 'cari']);
Route::get('/search', [pemeriksaanController::class, 'search'])->name('search');
Route::get('/laporan-home', [laporan_homeController::class, 'index'])->name('laporan_home');

//Cetak
Route::get('/pdf', [PdfController::class, 'print'])->name('print');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});