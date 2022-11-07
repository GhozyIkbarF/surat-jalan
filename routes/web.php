<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

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

// Route::get('/', function () {
//     return view('layouts.main');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->middleware(['auth', 'verified']);
    Route::get('/datasppd', 'datasppd')->middleware(['auth', 'verified']);
    Route::get('/dataspt', 'dataspt')->middleware(['auth', 'verified']);
    Route::get('/datauang', 'datauang')->middleware(['auth', 'verified']);
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pdf1', [PdfController::class, 'index']);
Route::get('/pdf2', [PdfController::class, 'pdf2']);

require __DIR__ . '/auth.php';

