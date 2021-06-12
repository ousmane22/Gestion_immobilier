<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterUser extends Controller
{
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'numeric', 'unique:users'],
            'usertype_id' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function saveUser(Request $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'usertype_id' => $data['usertype_id'],
            'telephone' => $data['telephone'],
            'password' => Hash::make($data['password']),
        ]);
        return view('home');
    }
}
