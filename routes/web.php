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

Route::get('/pdf3', [PdfController::class, 'pdf3']);


Route::resource('pegawai', PegawaiController::class)->middleware(['auth', 'verified']);
Route::resource('biaya', BiayaController::class)->middleware(['auth', 'verified']);
//log-viewers
Route::get('log-viewers', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
require __DIR__ . '/auth.php';
