<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function proccess_login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect()->route('home');
        }else{
            return redirec()->back()->with('status', 'Akses Ditolak!.. Password yang anda masukkan salah');
        }
    }

    public function logout()
    {
       Auth::logout();
       return redirect()->route('login');
    }
}
