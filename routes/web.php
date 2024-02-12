<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/datauser',[AdminController::class, 'data'])->name('datauser');
    Route::get('/admin/barang', [BarangController::class, 'barang'])->name('barang');
    Route::get('/admin/barang/create', [BarangController::class, 'create'])->name('createbarang');
    Route::post('/admin/barang/store',[BarangController::class, 'store'])->name('storebarang');
    Route::get('/admin/barang/edit/{id}',[BarangController::class, 'edit'])->name('editbarang');
    Route::get('/admin/user/create',[AdminController::class, 'create'])->name('createuser');
    Route::post('/admin/user/store',[AdminController::class, 'store'])->name('storeuser');
});