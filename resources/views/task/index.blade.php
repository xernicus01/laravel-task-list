@extends('Layout.layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header ">
                        <form action="/" method="get">
                            <div class="form-group d-flex">                           
                                <label for="status" >status</label>
                                <select name="status" id="status" class="form-controle mx-2">
                                    <option value="all">All</option>
                                    <option value="complete">complete</option>
                                    <option value="waiting">waiting</option>
                                    <option value="pending">pending</option>
                                </select>
                                <button type="submit" class="btn-primary" >filter</button>
                            </div>
                       </form>               
                    </div>
                    
                    <div class="card-body">
                        <div class="d-flex ">
                            <a href="{{ url('/task/create') }}" class="btn btn-success btn-sm" >
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <a href="/" class=" mx-5 btn btn-warning btn-sm" >
                                 Export data
                            </a>
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Initiation date </th>
                                        <th>expire date</th>
                                        <th> status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->creation }}</td>
                                        <td>{{ $item->echeance }}</td>
                                        <td>{{ $item->status }}</td>
 
                                        <td>
                                            <a href="{{ url('/task/' . $item->id) }}" title="View task"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/task/' . $item->id . '/edit') }}" title="Edit task"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/task' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete task" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
           <div class="d-flex mx-auto">
            <div class="mx-3"> <span class="bg-success  rounded-pill" >Complete  </span>&nbsp;  &nbsp; {{$p_complete}}</div>
            <div class="mx-3"> <span class="bg-warning rounded-pill"> Pending  </span> &nbsp;  &nbsp; {{$p_pending}}</div>
            <div class="mx-3"> <span class="bg-danger rounded-pill ">Waiting</span>  &nbsp;  &nbsp;  {{$p_waiting}}</div>
           </div>
        </div>

        
    </div>
@endsection