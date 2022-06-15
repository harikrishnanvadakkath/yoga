@extends('layout.app')
 
@section('content')


<div style="text-align:center">
<div class="card-header">Register</div>
<br>

<form action="{{ route('register.post') }}" method="POST">
@csrf
<div class="form-group row">
<label for="name">Name</label>
<div class="col-md-6">
    <input type="text" id="name" class="form-control" name="name">
    @error('name')
    <p>{{$message}}</p>
    @enderror
  
</div>
</div>
<br>
  
<div class="form-group row">
    <label for="email">Email</label>
    <div class="col-md-6">
        <input type="text" id="email" class="form-control" name="email" required >
        @error('email')
    <p>{{$message}}</p>
    @enderror
    

</div>
</div>
<br>
  
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
    <div class="col-md-6">
        <input type="password" id="password" class="form-control" name="password" required>
        @error('password')
    <p>{{$message}}</p>
    @enderror
    
   
</div>
</div>
<br>

<button type="submit" class="btn btn-primary">
Register
</button>
</div>
</form>

</div>
</div>

@endsection