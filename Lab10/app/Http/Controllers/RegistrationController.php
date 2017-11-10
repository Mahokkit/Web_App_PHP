<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view ('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        // Validate the form

        // create and save user
        $form->persist();

        return redirect()->home();
    }
}
