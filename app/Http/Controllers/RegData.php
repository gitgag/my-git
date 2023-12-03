<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegData extends Controller
{
    //
    public function regform ()
    {
        return view('update.reg-form');

    }
    public function postReg(Request $req)
    {
       
        $regdata = $req->validate ([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);
        User::create ([
            'name' => $regdata['name'],
            'email' => $regdata['email'],
            'password' => $regdata['password']
        ]);
        return redirect('/register')->with('status','registered successfully');
    }
}
