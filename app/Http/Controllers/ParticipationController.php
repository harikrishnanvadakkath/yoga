<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    public function index(){
   
    
        return view('participation.index',[
        'participation' => participation::latest()->filter(request(['age']))->get()
        ]);
      } 
        
    public function show(){
        return view('participation.show');
    } 

    public function create(){
      return view('participation.create');
    }


    public function store(request $request){
        
      $formfields = $request->validate ([
        'Name'   =>'required',
        'Age'    =>'required',
        'Address'=>'required',
        'phone'  =>'required',
        'email'  =>['required','Email']
      ]);

      participation::create($formfields);

      // return redirect('/')->with('message','participation created successfully!');


    }
      

      
    
          

    }
