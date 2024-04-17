<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Firstcontroller extends Controller
{
    public function homepage (){
        return view('register');

    }
    public function loginpage () {
        return view('login');
    }
    
    public function register(Request $request) {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $data['password']=Hash::make($request->password);
        $newuser=User::create($data);
        return redirect()->intended(route('login'));
    }
   public function login (Request $request) {
    $data=$request->validate([
        
        'email'=>'required',
        'password'=>'required'
    ]);
    $cred=$request->only('email', 'password');
    if (Auth::attempt($cred)) {
    return redirect()->intended(route('welcome'));
   }
}
    public function welcome (){
        return view('welcome');
    }

}
