<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            return redirect()->route('erick');
        }

        return view('modules.auth.login');
    }

    public function register(){
        return view('modules.auth.register');
    }

    public function registered(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();

        return redirect()->route('login')->with('success', 'Usuario creado con exito');
    }

    public function access(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('erick');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
