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
            'referral' => 'required',
            'image' => 'image|file|max:1024', 
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:18' 
        ]);

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

    // handle form login
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]); 

        // jika berhasil, maka pindahkan ke sebuah halaman

        // dd('Berhasil Login! ');
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // kalau berhasil diautentikasi maka akan diarahkan ke 
            return redirect()->intended('/user'); 
        }

        // jika tidak, maka akan diarahkan kembali halaman login dengan memberi pesan error
        return back()->with('loginError', 'Oops, login dinyatakan gagal!');
    }

    // Logout
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); 
    }



}
