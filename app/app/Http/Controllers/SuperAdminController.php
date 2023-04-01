<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Referral;
use App\Models\Client;

class SuperAdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'title' => 'Admin',
            'users' => User::all(),
            'clients' => Client::all()
        ]); 
    }

    // show all marketing
    public function marketing() {

        $users = User::latest();

        if(request('search')) {
            $users->where('name', 'like', '%' . request('search') . '%');
        }

        return view('admin.marketing', [
            'title' => 'Daftar Marketing - Desain Murah',
            // 'users' => User::where('is_owner', false)->get() 
            'users' => $users->get()
        ]);
    }
    
    // show form
    public function editKomisi(User $user) {
        return view('admin.edit-komisi', [
            'title' => 'Edit Komisi - Desain Murah ID',
            'user' => $user,
        ]); 
    }

    // form handle
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

        $clients = Client::latest();

        if(request('search')) {
            $clients->where('name', 'like', '%' . request('search') . '%');
        }

        return view('admin.progress-desain', [
            'title' => 'Progress Desain - Desain Murah ID',
            // 'clients' => Client::all() 
            'clients' => $clients->get()
        ]);
    }

    // show form
    public function addProgressDesain (User $user) {
        return view('admin.add-progress-desain', [
            'title' => 'Tambah Progress Desain',
            'users' => User::all(),
        ]);
    }

    // form handle
    public function addProgress(Request $request , Client $client) {
        // return $request;
        $validateData = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'keterangan' => 'required', 
        ]);

        Client::create($validateData);

        return redirect('/progress-desain')->with('success', 'Data Berhasil Ditambah !');  
    }

    // show form
    public function editProgress(Client $client) {
        return view('admin.edit-progress' , [
            'title' => 'Edit Progres Desain Klien - Desain Murah ID',
            'client' => $client,
            'users' => User::all()
        ]);
    }

    public function updateProgress(Request $request, Client $client) {
        // return $request;
        $rules = $request->validate([
            'name' => 'required',
            'keterangan' => 'required',
        ]);

        Client::where('id', $client->id)->update($rules);

        return redirect('/progress-desain')->with('success', 'Data Berhasil Diupdate!'); 
    } 

}
