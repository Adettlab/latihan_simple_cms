<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index (){
        
        return view('register.index');
    }

    public function tambah (request $request){

       $validateData= $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|unique:users',
            'password'=>'required|max:255'
        ]);

        User::create($validateData);

        $request->session()->flash('success', 'create account was succesfully! login now');

        return redirect('/login'); 
    }
}
