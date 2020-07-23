<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(\App\User $user)
    {
        return view('profiles.index', compact($user));
    }

    public function edit(\App\User $user)
    {
        
    }
}
