<?php

namespace App\Http\Controllers;


use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view ('sessions.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        // create and save user

        $user = User::create(request(['name', 'email', 'password']));
        // sign them in
        auth()->login($user);
        // redirect to home

        return redirect()->home();
    }
}
