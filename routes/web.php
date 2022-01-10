<?php

use App\Models\Profil;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PendidikanController;

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
    return view('index', [
        'profil' => Profil::find(1),
        'pendidikans' => Pendidikan::all()
    ]);
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register']);
Route::post('/daftar', [UserController::class, 'daftar']);
Route::post('/auth', [UserController::class, 'auth']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/dashboard_admin', function () {
    return view('dashboard.index', [
        'profils' => Profil::find(1)
    ]);
})->middleware('auth');

Route::resource('/profil', ProfilController::class)->middleware('auth');
Route::resource('/pendidikan', PendidikanController::class)->middleware('auth');
Route::resource('/contact', KontakController::class)->middleware('auth');
