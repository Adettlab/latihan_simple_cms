<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index (){
        return view('index');
    }

    public function authenticate(Request $request)
    {
       $validatedata = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedata)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dasboard');
        }
 
        return back()->with('loginError','GAGAL LOGIN');
    }

    public function logout (request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');

    }
}
