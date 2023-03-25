<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Referral;
use App\Models\Client;

class SuperAdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'title' => 'Admin'
        ]);
    }

    public function marketing() {
        return view('admin.marketing', [
            'title' => 'Daftar Marketing | Desain Murah',
            'users' => User::where('is_owner', false)->get()
        ]);
    }

    public function editKomisi(User $user) {
        return view('admin.edit-komisi', [
            'title' => 'Edit Komisi - Desain Murah ID',
            'user' => $user,
        ]); 
    }

    public function updateKomisi(Request $request, User $user) {
        // return $request;
        $rules = $request->validate([
            'komisi' => 'required',
            'klaim' => 'required',
        ]);

        User::where('id', $user->id)->update($rules);

        return redirect('/daftar-marketing')->with('success', 'Data Berhasil Diupdate!');
    } 

    // index page progress desain
    public function progressDesain(Client $client) {
        return view('admin.progress-desain', [
            'title' => 'Progress Desain - Desain Murah ID',
            'clients' => $client,
            // 'users' => $client->user->load('user', 'referral')
        ]);
    }

    // form add progress
    public function addProgressDesain (User $user) {
        return view('admin.add-progress-desain', [
            'title' => 'Tambah Progress Desain',
            'users' => User::all(),
            'referrals' => Referral::all()
        ]);
    }

    // handle form add progress
    public function addProgress(Request $request , Client $client) {
        // return $request;
        $validateData = $request->validate([
            'referral_id' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'keterangan' => 'required',
        ]);

        Client::create($validateData);

        return redirect('/progress-desain')->with('success', 'Data Berhasil Ditambah !'); 
    }


}
