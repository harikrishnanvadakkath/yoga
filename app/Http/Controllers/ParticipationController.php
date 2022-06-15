<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;
use  App\Http\Requests\ParticipationRequest;

class ParticipationController extends Controller
{
  
  //index function 

    public function index()
    {
      $participation = Participation::latest()->paginate(10);
      return view('participation.index');
    }

      public function show() {
        return view('participation.show');
    }   
      //create function

    public function create() {
      return view('participation.create');  
    }

       //store function

    public function store(ParticipationRequest $request)
    {

      $inputData = [
        'name' => $request->name,
        'age' => $request->age,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email 
      ];
      
      Participation::create($inputData);

      return redirect('/')->with('message','participation created successfully!');
    }

    public function edit(participation $participation) {

      return view('participation.edit');
    }
    public function update(Request $request, Participation $participation) {
  
      $inputData = [
        'name' => $request->name,
        'age' => $request->age,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email 
      ];
      
      Participation::update($inputData);

      return redirect('/')->with('message','participation updated successfully!');

    }
    public function destroy(Participation $participation) {

      $participation->destroy();
       
      return redirect('/')->with('message','participation deleted successfully!');

    }

  }