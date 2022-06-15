
@extends('layouts.compt')

@section('content')

<style>
    body {  


    }
    </style>
    <div style ="text-align:center">

    <form action="{{route('competition.store')}}" method="POST">
   
          @csrf
        <div class="mb-8">
        
            <br><br>
            <label for="title"> Title</label>
          
            <br>
            <input type="text" placeholder="title" class="border border-blue-200 rounded p-2 w-full" name="title" />
            <br><br>

            @error('title')
            <p> {{$message}} </p>
            @enderror

            <div class="mb-8">
            <br><br>

            <label for="date">Date</label>
            <br>
            <input type="date" placeholder="date" class="border border-red-200 rounded p-2 w-full" name="date" />
            <br><br>

             @error('date')
             <p> {{$message}} </p>
             @enderror

            <div class="mb-8">
                <br><br>
                <label for="description">Description</label>
                <br>
                <textarea cols="80" row="5" placeholder="description" name="description">
                </textarea><br><br>

                 @error('description')
                 <p> {{$message}} </p>                        
                  @enderror

                  <button type="submit" class="btn-SUBMIT">SUBMIT</button>
                    <br><br>
                   </form>
                   @endsection



                 


