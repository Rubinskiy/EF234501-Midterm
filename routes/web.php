<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/api/register', [AuthController::class, 'registerApi'])->name('registerApi');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/api/login', [AuthController::class, 'loginApi'])->name('loginApi');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/logout', function () {
    session_start();
    session_destroy();
    return redirect()->route('login');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/create', 'RantController@create')->name('create');
    Route::get('/rants', 'RantController@rants')->name('rants');
});
