<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;

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
}); 

Route::get('/home', function(){
    return view('home');
});

// route login and register
Route::get('/login', [RegistrasiController::class, 'loginUser'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');   
Route::get('/registrasi', [RegistrasiController::class, 'registrasiUser']);
Route::post('/registrasi-user', [RegistrasiController::class, 'storeUser']);  
Route::get('/verification', [RegistrasiController::class, 'linkVerification']); 

// email verification 
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend'); 
