<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //attempt to auth user

        if (! auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
        else
        {
            return redirect()->home();
        }



        // if not redirect back

        // if so, sign them in

        // redirect
    }

    public function destroy()
    {
        auth()-logout();

        return redirect()-home();
    }
}
