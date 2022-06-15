@extends('layout.app')

@section('content')


<div style="text-align:center">


<form action="{{ route('logout') }}" method="POST">
@csrf
<div class="form-group row">
<div class="header">LOGOUT</div>
<br>
<label for="email_address">Email </label>
<div class="col-md-6">
    <input type="text" class="form-control" name="email">
    
</div>
</div>
<br><br>

<div class="form-group row">

<label for="password" >Password</label>
<div class="col-md-6">
<input type="password"  class="form-control" name="password" >

</div>
</div>
<br>
<br>

    <button type="submit" class="btn btn-primary">
        Logout
    </button>
</div>
</form>
