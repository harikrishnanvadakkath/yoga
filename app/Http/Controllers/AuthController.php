<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }  

     
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')

             ->with('message','You have Successfully loggedin');
        }
  
        return redirect("login")->with('message','You have entered invalid credentials');
    }

    public function dashboard()
    {
        if(Auth::check()){
            
            return view('admin.dashboard');
        }
  
        return redirect("login")->with('message','You do not have access');
    }
     
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     public function logout() {
        Auth::logout();
  
        return Redirect('login');

    }
}


