<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\LoginController;

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

Route::get('/admin',function(){
    return view('_admin/admindashboard');
});

Route::get('/registration',[Registration::class,'index'])->name('registration');
Route::get('/registration/store',[Registration::class,'store'])->name('registration.store');
Route::get('/login',[Registration::class,'loginShow'])->name('login');
Route::post('login',[Registration::class,'login'])->name('loginDetails');

