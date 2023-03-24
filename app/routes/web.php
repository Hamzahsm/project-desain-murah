<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\UserDashborad;
use App\Http\Controllers\SuperAdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', function(){
    return view('home', [
        'title' => 'Home'
    ]);
});

// route login and register
Route::get('/login', [RegistrasiController::class, 'loginUser'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');   
Route::get('/registrasi', [RegistrasiController::class, 'registrasiUser']);
Route::post('/registrasi-user', [RegistrasiController::class, 'storeUser']);  
Route::get('/verification', [RegistrasiController::class, 'linkVerification']); 
Route::post('/logout', [RegistrasiController::class, 'logout']); 

// email verification 
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend'); 

// dashboard user
Route::resource('/user', UserDashborad::class);
Route::get('/my-profile/{user:name}', [UserDashborad::class, 'myProfile']); 
Route::get('/dashboard/{user:name}', [UserDashborad::class, 'myDashboard']);
// Route::get('/my-profile/{user:name}', [UserDashborad::class, 'myProfile'])->middleware('auth'); 

// SuperAdmin 
Route::get('/super-admin', [SuperAdminController::class, 'index'])->middleware('is.owner'); 
Route::get('/daftar-marketing', [SuperAdminController::class, 'marketing'])->middleware('is.owner');
Route::get('/edit-komisi/{user:name}', [SuperAdminController::class, 'editKomisi'])->middleware('is.owner');
Route::post('/update-komisi/{user:name}', [SuperAdminController::class, 'updateKomisi'])->middleware('is.owner'); 