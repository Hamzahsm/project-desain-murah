<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserDashborad extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        return view('dashboard.index', [
            'title' => 'User Dashboard',
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function myProfile(User $user){
        // authorization
        // $this->authorize('owner');
        return view('dashboard.profile', [
            'title' => 'My Profile',
            'user' => $user
        ]); 
    } 

    public function myDashboard(User $user){
        return view('dashboard.dashboard', [
            'title' => 'Dashboard - Desain Murah ID',
            'user' => $user,
            // 'clients' => $user->client->user_id
            // 'clients' => Client::all()
            'clients' => Client::where('user_id', auth()->user()->id)->latest()->get(), 
        ]); 
    }  

    // show form edit profile
    public function editProfile(User $user) {
        return view('dashboard.edit-profile', [
            'title' => 'Edit My Profile - Desain Murah ID',
            'user' => $user
        ]);
    }

    // handle form
    public function updateProfile (Request $request, User $user) {
        $rules = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'username' => 'required',
            'referral' => 'required',
            'image' => 'file|max:1024', 
            'email' => 'required|email:dns',
        ]);

        // $validatedData = $request->validate($rules);

        // validasi gambar
        if($request->file('image')) {
            // kalau ada gambar baru, hapus dulu yang lama, terus ganti yang baru
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $rules['image'] = $request->file('image')->store('foto-user'); 
        } 

        // User::where('id', $user->id)->update($rules);
        User::where('id', $user->id)->update($rules);

        return redirect('/')->with('success', 'Data Profile Berhasil Diupdate!');
    }

}
