<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create()
    {
        //contact view folder
        return view('contact.create');
    }
    // get request and records  from registration form
    public function store(Request $request)
    {
       $input = $request->all();
       User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        //hash for security purpose to hide password
        'password' => Hash::make($input['password'])
      ]);
       return view('contact.thanks');
    }

    public function directLogin()
    {
        

        return redirect()->route('login.index');
    }
}
