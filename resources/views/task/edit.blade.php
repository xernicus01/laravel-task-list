@extends('Layout.layout')
@section('content')
 
<div class="row">
  <div class="col-lg-9">
    <div class="card">
      <div class="card-header">Edit Task</div>
      <div class="card-body">
          
          <form action="{{ url('task/' .$tasks->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
            <label>Description</label></br>
            <input type="text" name="description" id="name" value="{{$tasks->description}}" class="form-control"></br>
            <label>echeance</label></br>
            <input type="date" name="echeance" id="echeance" value="{{$tasks->echeance}}" class="form-control"></br>
    
            <label>status</label></br>
            <select name="status" id="status" class="form-control">
              <option value="pending">pending</option>
              <option value="complete">complete</option>
              <option value="waiting">waiting</option>
    
            </select>
            
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
       
      </div>
    </div>
  </div>
</div>
 
@stop