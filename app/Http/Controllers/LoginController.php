<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function reg()
    {

        return view('auth.register');
    }
    public function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required",
            'email' => "required",
            'password' => "required"
        ]);

        if ($validator->fails()) {
            return redirect()->back();
        }


        DB::table('users')
            ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

        return redirect('/login');
    }

    public function index()
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back();
    }
}
