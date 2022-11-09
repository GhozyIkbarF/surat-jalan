<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SptController;
use App\Http\Controllers\SppdController;
use App\Http\Controllers\BiayaController;

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
    return view('layouts.main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(SppdController::class)->group(function () {
    Route::get('/sppd', 'index')->name('datasppd');
    Route::get('/create-sppd', 'create')->middleware(['auth', 'verified'])->name('tambahsppd');
});

Route::get('/spt', [SptController::class, 'index']);
Route::get('/biaya', [BiayaController::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pdf1', [PdfController::class, 'index']);
Route::get('/pdf2', [PdfController::class, 'pdf2']);
Route::get('/pdf3', [PdfController::class, 'pdf3']);


Route::resource('pegawai-ajax-crud', PegawaiAjaxController::class);
require __DIR__ . '/auth.php';
