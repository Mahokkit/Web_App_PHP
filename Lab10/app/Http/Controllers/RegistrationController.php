<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationRequest;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view ('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        // Validate the form

        // create and save user

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        // sign them in
        auth()->login($user);
        // redirect to home

        \Mail::to($user)->send(new Welcome($user));
        return redirect()->home();
    }
}
