<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login-form');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|max:20',
            'password' => 'required|min:3|regex:/[A-Z]/',
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'username.max' => 'Username maksimal 20 karakter',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 3 karakter',
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kapital'
        ]);

        $data['username'] = $request->username;
        $data['password'] = $request->password;

        return view('auth.login-success', $data);
    }
}