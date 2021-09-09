<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pemeriksaanController;
use App\Http\Controllers\HomeController;

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

Route::get('/penindakan', function()
    {return view('penindakan');
});

Route::get('/infokom', function()
    {return view('infokom');
});

Route::get('/pengujian', function()
    {return view('pengujian');
});

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

Route::resource('pemeriksaan', pemeriksaanController::class);






