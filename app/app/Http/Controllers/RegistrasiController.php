<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegistrasiController extends Controller
{
    // Form Login
    public function loginUser(){
        return view('registrasi/login', [ 
            "title" => "Login User"
        ]);
    } 

    // form registrasi
    public function registrasiUser(){
        return view('registrasi/registrasi', [ 
            "title" => "Registrasi User"
        ]);
    }

    // handle form registrasi
    public function storeUser(Request $request){
        // return $request->all();

        $validatedDate = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'username' => 'required',
            'image' => 'image|file|max:1024', 
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:18'
        ]);

        // validasi gambar
        if($request->file('image')) {
            $validatedDate['image'] = $request->file('image')->store('foto-user'); 
        }

        $validatedDate['password'] = bcrypt($validatedDate['password']); 

        // User::create($validatedDate);

        // return redirect('/login')->with('success', 'Registrasi Berhasil!'); 
        $user = User::Create($validatedDate);

        event(new Registered($user)); 

        auth()->login($user); 
        // return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
        return redirect('/verification')->with('resent', 'Email Verifikasi berhasil di kirim, silahkan cek email!');
        
    } 

    // ke halaman verifikasi 
    public function linkVerification() {
        return view ('registrasi.verification', [
            'title' => 'Verification'
        ]);
    }



}
