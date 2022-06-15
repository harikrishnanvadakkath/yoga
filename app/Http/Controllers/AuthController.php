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
    public function registration()
    {
        return view('admin.registration');
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
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->with('message','You have Successfully loggedin');
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

    public function asanacategory(){

        return view('admin.asanacategory');
    }
}

