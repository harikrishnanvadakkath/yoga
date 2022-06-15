<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use  App\Http\Requests\CompetitionRequest;

class CompetitionController extends Controller
{
    //index function
    public function index() 
    {
    return view ('competition.index');
    }
    //show function

    public function show() {
        return view('competition.show');
    }
    //create function

    public function create() {
        
        return view('competition.create');
    }
    //store function

       public function store(Request $request) 
    {
        
        $inputData = [
            'title'=>$request->title,
            'date'=>$request->date,
            'description'=>$request->description,
            'winner'=>$request->winner
        ];
        
        Competition::create($inputData);
        
        return redirect('/')->with('message','competition created successfully!');
  }
}

