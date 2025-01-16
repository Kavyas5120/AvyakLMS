<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function check(Request $request){
        $credentials = $request->validate([
            "email"=>[ "required","email"],
            "password"=>["required"],
        ]);
        if(Auth::attempt($credentials)){
            return view('dashboard');
        }
        return "<h2>Username or password Invalid</h2>";

    }

    public function index(){
        return view('login');
    }
    public function create(){
        return view('regsiter');
    }

    public function store(Request $request){
        $data = $request->all();
        User::create([
            "name"=>$data['name'],
            "email"=>$data['email'],
            "password"=>Hash::make($data['password']),
        ]);
        return view('dashboard');
    }


    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/login'); // Redirect to the login page
    }
}
