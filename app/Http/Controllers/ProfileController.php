<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /*  */
    public function index()
    {
        $user = auth()->user()->load('socialAccount');
        return view('profile.index', compact('user'));
    }

    public function update()
    {
        dd(\request()->all());
    }
    /*  */
}
