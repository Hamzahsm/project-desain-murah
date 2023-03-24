<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index() {
        // return 'ini adalah halaman admin';
        return view('admin.index', [
            'title' => 'Admin'
        ]);
    }
}
