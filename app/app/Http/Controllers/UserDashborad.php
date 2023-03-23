<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            // 'products' => Product::where('user_id', auth()->user()->id)->latest()->get(),
            // 'posts' => Post::where('user_id', auth()->user()->id)->latest()->get(),
            // 'priorities' => Priority::where('user_id', auth()->user()->id)->latest()->get()
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
}
