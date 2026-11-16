@extends('layout.app')

@section('content')
    <h1>All Users</h1>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Created At</th>
            <th>Update At</th>
            <th>Action</th>
        </tr>

        @foreach($rec as $r)
        <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->name}}</td>
            <td>{{$r->age}}</td>
            <td>{{$r->city}}</td>
            <td>{{$r->created_at}}</td>
            <td>{{$r->updated_at}}</td>
            <td> 
                <a href="{{route('upd_route', ['id'=>$r->id])}}" class="btn btn-warning">Edit</a>     
                <a href="{{route('del_route', ['id'=>$r->id])}}" class="btn btn-danger">Delete</a>     
            </td>

        </tr>
        @endforeach
    </table>


    @endsection