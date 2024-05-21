<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    
    public function create() 
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email_verified_at' => ['nullable', 'date'],
            'password' => ['required', Password::min(6)],
        ]);
        //create user
        $user = User::create($attributes);

        //log in
        Auth::login($user);
        return redirect('/jobs');
    }

}
