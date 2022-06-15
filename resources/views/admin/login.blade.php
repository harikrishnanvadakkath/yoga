@extends('layout.app')

@section('content')


<div style="text-align:center">


<form action="{{ route('login.post') }}" method="POST">
@csrf
<div class="form-group row">
<div class="header">LOGIN</div>
<br>
<label for="email_address">Email </label>
<div class="col-md-6">
    <input type="text" class="form-control" name="email">

    @error('email')
<p>{{$message}}</p>
@enderror

</div>
</div>

<br><br>

<div class="form-group row">

<label for="password" >Password</label>
<div class="col-md-6">
<input type="password"  class="form-control" name="password">

@error('password')
<p>{{$message}}<p>
    @enderror
</div>
</div>

<br>
<br>

    <button type="submit" class="btn btn-primary">
        Login
    </button>
</div>
</form>
