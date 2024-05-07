<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
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
    return view('layout');
});

/* Admin Routes Here */
Route::get('/admin',function(){
    return view('_admin/admindashboard');
});

/* Authentication Routes */
Route::get('/admin/login',[AuthController::class,'show'])->name('admin.login');
Route::post('/auth/login', [AuthController::class,'AuthLogin'])->name('auth.login');

Route::get('/registration',[Registration::class,'index'])->name('registration');
Route::get('/registration/store',[Registration::class,'store'])->name('registration.store');
Route::get('/login',[Registration::class,'loginShow'])->name('login');
Route::post('login',[Registration::class,'login'])->name('loginDetails');

