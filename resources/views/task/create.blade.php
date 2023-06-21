@extends('Layout.layout')
@section('content')
 
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <div class="card">
        <div class="card-header">Create task</div>
        <div class="card-body">
            
            <form action="{{ url('task') }}" method="post">
              {!! csrf_field() !!}
              <div class="form-group">
                <label>Description</label></br>
                <input type="text" name="description" id="description" class="form-control" required></br>
              </div>
              <div class="form-group">
                <label for="echeance">Date d'échéance</label>
                <input type="date" id="echeance" name="echeance"  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="echeance">Status</label>
    
                <select name="status" id="status" class="form-control">
                  <option value="pending">pending</option>
                  <option value="complete">complete</option>
                  <option value="waiting">waiting</option>
        
                </select>
              </div>
              <input type="submit" value="Save task" class="btn btn-success"></br>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection