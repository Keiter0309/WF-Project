<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->except('logout');
    }

    public function register() {
    if (View::exists('show_register')) {
        return view('register');
    } else {
        return response()->json(['error' => 'View not found'], 404);
    }
}

    public function process_signup(Request $request) {
         $this->validate(request(), [
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

         $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            return response()->json([
                'message' => 'User created successfully',
                'user' => $user
            ], 201);
    }
}
