@extends('layout.app')

@section('content')

<div class="row">
    <a href="{{('category.store'}}" class="btn btn-success">Add</a>
	</div>
    <table class="table table-bordered">
        <thead>
        <tr>
              <th>Name</th>
                
             </tr>
             @foreach($categories as $category)
      </thead>
       <tbody>
    <tr>

        <td>{{Uttanasana}}</td>
        <td>{{Virabhadrasana1}}</td>
        <td>{{Marjaryasana-Bitilasana}}</td>
        <td>{{Bhujangasana}}</td>
        <td>{{Dhanurasana}}</td>
        <td>{{Natarajasana}}</td>
        <td>{{Setu Babdha Sarvangasana}}</td>
        <td>{{Baddha Konasana}}</td>
        <td><a href ="{{route('category.edit'}}" class="btn btn-primary m-1">edit</a>
        <td><a href="{{route('category.destroy'}}" class="btn btn-primary m-1">delete</a>
        </form>
    </td>
</tr>
@endforeach
</tbody>
{{$categories->links()}}

@endsection

