<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laravel</h1>

    {{"Welcome to Laravel"}}

    <form action="{{route('update_route', ['id' => $std_id->id])}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="n" value="{{$std_id->name}}"> <br>

        <label for="">Age</label>
        <input type="text" name="a" value="{{$std_id->age}}"> <br>

        <label for="">City</label>
        <input type="text" name="c" value="{{$std_id->city}}"> <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>