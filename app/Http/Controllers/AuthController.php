<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register User   
    public function register(Request $request) 
    {
        // Validation
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        //Register
        $user = User::create($fields);

        // Login 
        Auth::login($user);

        // Redirect
        return redirect()->route('home');

    }


    // Login User 
    public function login(Request $request) 
    {
        // Validation
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);


        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended('home');
        } else {
            return back()->withErrors([
                'failed' => "Les informations d'identification fournies ne correspondent pas"
            ]);
        }
    }
}
