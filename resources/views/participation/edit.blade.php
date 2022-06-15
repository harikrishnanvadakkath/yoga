    @extends('layouts.app')

    @section('content')

    <div class="row">
    <form method="post" action="{{ route('participation.update', $participation->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
                <strong>Name:</strong>
                 <input type="text" name="name"  class="form-control" placeholder="name">
            </div> 
         </div> 

        <div class="col-xs-12 col-sm-12 col-md-12">  
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="Age" class="form-control" placeholder="age">
            </div>
         </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address"  class="form-control" placeholder="Address">  
            </div>
         </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" name="phone"  class="form-control" placeholder="phone">
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>email:</strong>
                <input type="text" name="email"   class="form-control" placeholder="email">
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <a href="{{ route('participation.create') }}" class="btn btn-warning">Back</a>
                <input type="submit" class="btn btn-success">
        </div> 
     </div> 
    </form> 
    @endsection 