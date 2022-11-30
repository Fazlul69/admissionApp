<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FormController::class, 'index'])->name('admission_form');
Route::post('/submitted', [FormController::class, 'store'])->name('submitform');
//Route::get('/download',[FormController::class, 'store'])->name('download_pdf');

Route::get('/basic-info', [DashboardController::class, 'index'])->name('basic-info.index');
Route::get('/basic-info/{id}',[DashboardController::class, 'show'])->name('profilepage');