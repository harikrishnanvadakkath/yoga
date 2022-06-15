@extends('layouts.app') 

@section('content')

    <div class="row">
    <a href="{{ route('participation.index') }}" class="btn btn-success">Add</a>
	</div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Age</th>
            <th>address</th>    
            <th>phone</th>
            <th>email</th>
        </tr>
     </thead>
        <tbody>
        @foreach ($participations as $participation}}
        <tr>
            <td>{{ $participation->id}}</td>
            <td>{{ $participation->name }}</td>
            <td>{{ $participation->age }}</td>
            <td>{{ $participation->address }}</td>
            <td>{{ $participation->phone }}</td>
            <td>{{ $participation->email }}</td>
            <td>
            <a href="{{ route('participation.show', $participation->id) }}" class="btn btn-primary m-1">Show</a>
			<a href="{{ route('participation.edit', $participation->id) }}" class="btn btn-primary m-1">Edit</a>
			<a href="#" class="btn btn-danger m-1" onclick="document.getElementById('delete{{ $participation->id }}').submit();">Delete</a>
			<form method="post" action="{{ route('participation.destroy', $participation->id) }}">
            @csrf
			@method('DELETE')
            </form>
        </td>
        </tr>
        @endforeach
        <tbody>
    </table>
@endsection
