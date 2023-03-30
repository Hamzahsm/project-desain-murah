<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\UserDashborad;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\PagesController;

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
Route::get('/dashboard/{user:name}', [UserDashborad::class, 'myDashboard'])->middleware('auth'); 
// Route::get('/my-profile/{user:name}', [UserDashborad::class, 'myProfile'])->middleware('auth'); 

// SuperAdmin 
Route::get('/super-admin', [SuperAdminController::class, 'index'])->middleware('is.owner'); 
Route::get('/daftar-marketing', [SuperAdminController::class, 'marketing'])->middleware('is.owner');
Route::get('/edit-komisi/{user:name}', [SuperAdminController::class, 'editKomisi'])->middleware('is.owner');
Route::post('/update-komisi/{user:name}', [SuperAdminController::class, 'updateKomisi'])->middleware('is.owner'); 
Route::get('/progress-desain', [SuperAdminController::class, 'progressDesain'])->middleware('is.owner');
Route::get('/add-progress-desain', [SuperAdminController::class, 'addProgressDesain'])->middleware('is.owner');
Route::post('/add-progress', [SuperAdminController::class, 'addProgress'])->middleware('is.owner'); 
Route::get('/edit-progress-desain/{client:name}', [SuperAdminController::class, 'editProgress'])->middleware('is.owner');


// halaman-halaman

Route::get('/jasa-kolam-koi', [PagesController::class, 'jasaKolamKoi']);
Route::get('/jasa-desain-rumah-mewah', [PagesController::class, 'desainRumahMewah']);
Route::get('/jasa-desain-rumah-minimalis', [PagesController::class, 'desainRumahMinimalis']);
Route::get('/jasa-desain-rumah-modern', [PagesController::class, 'desainRumahModern']);
Route::get('/jasa-desain-gedung-kantor', [PagesController::class, 'desainGedung']);
Route::get('/jasa-desain-mall', [PagesController::class, 'desainMall']);
Route::get('/custom-desain', [PagesController::class, 'customDesain']);
Route::get('/tentang-kami', [PagesController::class, 'tentangKami']);
Route::get('/harga-desain', [PagesController::class, 'hargaDesain']);
Route::get('/kontak-kami', [PagesController::class, 'kontakKami']);
Route::get('/portofolio-desain', [PagesController::class, 'portofolioDesain']);
