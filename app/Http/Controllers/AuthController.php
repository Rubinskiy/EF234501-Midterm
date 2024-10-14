<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

session_start();

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function registerApi(Request $request) {
       $request->validate([
        "name" => "required",
        "email" => "required",
        "password" => "required"
       ]);

       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =  Hash::make($request->password);
       
       if ($user->save()) {
           return redirect(route('login'))->with('success', 'User "' . $user->name . '" created');
       } else {
            return redirect(route('error'))->with('error', 'Error creating user: ' . $user->getError());
       }
    }

    public function login() {
        return view('login');
    }

    public function loginApi(Request $request) {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // set session
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user->id;
            $_SESSION['name'] = $user->name;

            return redirect(route('home'));
        } else {
            return redirect(route('login'))->with('error', 'Invalid email or password');
        }
    }
}
