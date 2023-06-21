@extends('Layout.layout')
@section('content')
 
 

 
<div class="row">
  <div class="col-lg-9">
    <div class="card">
      <div class="card-header">View Task {{$tasks->id}}</div>
      <div class="card-body">
            <div class="card-body">
            <h5 class="card-title">Description : {{ $tasks->description }}</h5>
            <h5 class="card-title">Date echeance : {{ $tasks->echeance }}</h5>
            <h5 class="card-title">Status : {{ $tasks->status }}</h5>
      </div>
           
        </hr>
      
      </div>
    </div>
  </div>
</div>

@endsection
