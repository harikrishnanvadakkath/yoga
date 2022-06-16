
@extends('layout.app')

@section('content')
<style>
    div {
  background-color: lightgray;
  margin:15px;
    }

</style>
</head>
<body>
 
<div class="col-md-8"><div class="topnav">
 
  <a href ="{{route('logout')}}">Logout</a>

 <table style="width:100%">

    <div class="header">Dashboard</div>  
    <br>
    <br><br>
</div>

You are Logged In
@endsection