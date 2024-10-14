<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RantController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::middleware(['auth'])->group(function () {
    Route::get('/create', [RantController::class, 'create'])->name('create');
    Route::get('/rants', [RantController::class, 'rants'])->name('rants');
    Route::get('/rants/{user_id}', [RantController::class, 'userRants'])->name('userRants');

    Route::post('/api/create_rant', [RantController::class, 'createApi'])->name('createApi');
    Route::post('/api/delete_rant', [RantController::class, 'deleteApi'])->name('deleteApi');
    Route::get('/api/update_rant', [RantController::class, 'updateApi'])->name('updateApi');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
