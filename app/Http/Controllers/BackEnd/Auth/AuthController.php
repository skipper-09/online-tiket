<?php

namespace App\Http\Controllers\BackEnd\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Front-end.page.auth.login.index');
    }

    public function autenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin.pemesan')
                ->withSuccess('You have Successfully loggedin');
        }

        return back()->withErrors('password', 'Invalid password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pemesan')->with('toast_success', 'Berhasil Logout');
    }
}
