    @extends('layouts.app')

    @section('content')

     <div style="text-align:center">
     
     <form action="{{ route('participation.store') }}" method="POST">

     @csrf
    <div class="mb-6">
    <br><br>
    <label for="Name"  class="inline-block text-lg mb-2"> Name</label>
    <br>
    <input type="text" placeholder="Name" class="border border-blue-200 rounded p-2 w-full" name="name" />
    <br><br>

    @error('name')
    <p> {{ $message }} </p>
    @enderror

   <div class="mb-6">
    <label for="Age" class="inline-block text-lg mb-2">Age</label>
    <br>
    <input type="text" placeholder="Age" class="border border-gray-200 rounded p-2 w-full" name="age" />
    <br><br>

    @error('age')
    <p> {{ $message }} </p>
    @enderror
                   
    <div class="mb-6">
    <label for="Address" class="inline-block text-lg mb-2">Address</label>
    <br>
    <class=border border-gray-200 rounded p-2 w-full>
    <textarea cols="80" row="5" placeholder="Address" name="address">
    </textarea><br><br>

    @error('address')
    <p> {{ $message }} </p>
    @enderror

    <div class="mb-6">
    <label for="phone" class="inline-block mb-2">
     phone</label>
    <br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone"
    placeholder="Phoneno" size="40">
   <br><br>

    @error('phone')
    <p> {{ $message }} </p>
        @enderror
                        
    <div class="mb-6">
    <label for="email" class="inline-block text-lg mb-2">Email</label>
    <br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" 
    placeholder="Enter Email" name="email" size="60">
    <br><br>

    @error('email')
    <p> {{ $message }} </p>
    @enderror
    
		<a href="{{ route('participation.create') }}"> </a>
    <button type="submit" class=btn-REGISTER>REGISTER </button>
    <br><br>
    </form>
    @endsection

