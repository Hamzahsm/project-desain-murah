<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'user' => $user
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
}
