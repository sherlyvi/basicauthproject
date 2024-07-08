@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users </h2>
            </div>
            <div class="pull-right">
               
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @php $i=1;
        @endphp
        @foreach ($users as $user)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
               
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
        
    </table>
  
    
      
@endsection