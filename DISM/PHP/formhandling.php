<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Name</label>
        <input type="text" name="name" > <br>
        <label for="">Email</label>
        <input type="text" name="email" > <br>
        <label for="">Age</label>
        <input type="text" name="age" > <br>
        <button type="submit" name="sub">Submit</button>
    </form>
</body>
</html>

<?php
if(ISSET($_REQUEST["sub"])){
    $n = $_REQUEST["name"];
    $e = $_REQUEST["email"];
    $a = $_REQUEST["age"];

    if(empty($n)){
        echo "Name is Required";
    }
    else if(strlen($n) < 3){
        echo "Name should contain atleast 3 characters";
    }
    else if(empty($e)){
        echo "Email is Required";
    }
    else if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
        echo "Please provide correct Email";
    }
    else if(empty($a)){
        echo "Age is Required";
    }
    else if(!is_numeric($a)){
        echo "Please provide correct age";
    }

    echo "Name: " . $n . "<br>";
    echo "Email: " . $e . "<br>";
    echo "Age: " . $a . "<br>";
}

?>
