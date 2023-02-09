<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('landing-page');
});

Route::view('/loginn', 'loginn');
Route::view('/register', 'register');
Route::view('/hume', 'hume');
Route::view('/bindo', 'bindo');
Route::view('/sejarah', 'sejarah');
Route::view('/after-kelas', 'after-kelas');
Route::view('/after-bab', 'after-bab');
Route::view('/after-materi', 'after-materi');
Route::view('/landing-page', 'landing-page');
Route::view('/landing-page/#home', 'landing-page');
Route::view('/landing-page/#material', 'landing-page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'coba'])->name('hume');
