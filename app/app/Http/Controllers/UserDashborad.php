<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        // authorization
        // $this->authorize('owner');
        return view('dashboard.dashboard', [
            'title' => 'Dashboard - Desain Murah ID',
            'user' => $user
        ]); 
    } 

}
