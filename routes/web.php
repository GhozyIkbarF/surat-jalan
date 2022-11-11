<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PegawaiController;
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
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/pdf1', [PdfController::class, 'index']);
Route::get('/pdf2', [PdfController::class, 'pdf2']);
Route::get('/datasppd', function () {
    return view('pages.datasppd');
});
Route::resource('pegawai', PegawaiController::class);

require __DIR__ . '/auth.php';
