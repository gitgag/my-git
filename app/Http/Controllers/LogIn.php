<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class LogIn extends Controller
{
    //
    public function index()
    {

        return view('update.login-form');
    }

    public function Loginhere (Request $req)
    {
      
       $loginfo = $req ->validate ([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);
      
        if(Auth::attempt ($loginfo))
        {
            $req->session()->regenerate();
            return redirect()->route ('update-page');
        }
       return back()->withErrors([
        'email' => 'cridentials do not match',
       ])->onlyInput('email');
    }

    public function logout(Request $req): RedirectResponse
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
       
        return redirect ('/');

    }
}
