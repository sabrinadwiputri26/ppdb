<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;

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

Route::get('/',[PpdbController::class, 'home'])->name('home'); 
Route::post('/login/auth',[PpdbController::class, 'auth'])->name('login.auth');
Route::get('/login',[PpdbController::class, 'login'])->name('login'); 
Route::get('/daftar',[PpdbController::class, 'daftar'])->name('daftar');
Route::post('/daftar/input',[PpdbController::class, 'daftarAccount'])->name('daftar.input');
Route::get('/view',[PpdbController::class, 'view'])->name('view');