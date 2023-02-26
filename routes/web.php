<?php

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\UmpcController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WifiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\WirelessController;
use App\Http\Controllers\DashboardController;


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


route::get('/', [LoginController::class, 'index'])->middleware('guest');
route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
route::post('/loginuser', [LoginController::class, 'login']);
route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
route::get('/register', [LoginController::class, 'register'])->middleware('guest');
route::post('/registeruser', [LoginController::class, 'store'])->middleware('guest');
route::get('/forgetpassword', [ForgetController::class, 'forget'])->name('forget.password.get');
route::post('/forgetpassword', [ForgetController::class, 'submitforget'])->name('forget.password.post');
route::get('/resetpassword/{token}', [ForgetController::class, 'reset'])->name('reset.password.get');
route::post('/resetpassword', [ForgetController::class, 'submitreset'])->name('reset.password.post');

Route::group(['middleware' => ['auth','admin']], function() {

    Route::get('/dashboard', [DashboardController::class,'index']);
    route::get('/tuntas', [DashboardController::class, 'tuntas']);
    route::get('/tuntas/cetak', [DashboardController::class, 'cetaktuntas']);
    route::get('/tidaktuntas', [DashboardController::class, 'tidaktuntas']);
    route::get('/tidaktuntas/cetak', [DashboardController::class, 'cetaktidaktuntas']);
    route::get('/ratarata', [DashboardController::class, 'ratarata']);
    route::get('/ratarata/export', [DashboardController::class, 'export']);
    route::get('/ratarata/cetak', [DashboardController::class, 'cetak']);

    Route::get('/peserta', [UserController::class,'index']);
    Route::post('/tambahpeserta', [UserController::class,'store']);
    Route::post('/editpeserta/{id}', [UserController::class,'edit']);
    Route::put('/updatepeserta/{id}', [UserController::class,'update']);
    Route::delete('/hapuspeserta/{id}', [UserController::class,'destroy']);

    Route::get('/kategori_barang', [Controller::class,'index']);

    Route::get('/UMPC', [UmpcController::class,'umpc']);
    Route::post('/tambahumpc', [UmpcController::class,'tambah_umpc']);
    Route::put('/updateumpc/{id}', [UmpcController::class,'edit_umpc']);
    Route::delete('/hapusumpc/{id}', [UmpcController::class,'hapus_umpc']);

    Route::get('/CCTV', [CctvController::class,'cctv']);
    Route::post('/tambahcctv', [CctvController::class,'tambah_cctv']);
    Route::put('/updatecctv/{id}', [CctvController::class,'edit_cctv']);
    Route::delete('/hapuscctv/{id}', [CctvController::class,'hapus_cctv']);

    Route::get('/WIFI', [WifiController::class,'wifi']);
    Route::post('/tambahwifi', [WifiController::class,'tambah_wifi']);
    Route::put('/updatewifi/{id}', [WifiController::class,'edit_wifi']);
    Route::delete('/hapuswifi/{id}', [WifiController::class,'hapus_wifi']);

    Route::get('/WIRELESS', [WirelessController::class,'wireless']);
    Route::post('/tambahwireless', [WirelessController::class,'tambah_wireless']);
    Route::put('/updatewireless/{id}', [WirelessController::class,'edit_wireless']);
    Route::delete('/hapuswireless/{id}', [WirelessController::class,'hapus_wireless']);

});

Route::get('/home', [DashboardController::class,'home']);
