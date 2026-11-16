
@extends('layout.app')

@section('content')

    <form action="/addStudent" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="n"> <br>

        <label for="">Age</label>
        <input type="text" name="a"> <br>

        <label for="">City</label>
        <input type="text" name="c"> <br>

        <button type="submit">Add</button>
    </form>

@endsection