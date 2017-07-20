<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    /**
    *
    *
    */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        return redirect('/register');
    }
}
