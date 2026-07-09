<?php

$num1 = 10; 
$num2 = "10";

//Arithmetic (+, -, *, /, %, **)

// echo $num1 + $num2 . " - "; //10
// echo $num1 - $num2 . " - "; //2
// echo $num1 * $num2 . " - "; //24
// echo $num1 / $num2 . " - "; //1.5
// echo $num1 % $num2 . " - "; //2
// echo $num1 ** $num2 . " - "; //2


//Assignment Opr(+=, -=, *=, /=, %=, **=)

// echo $num1;
// echo $num2;

// echo $num1 += $num2 . " - "; //9

// echo $num1;
// echo $num2;

// echo $num1 -= $num2 . " - "; //2
// echo $num1 *= $num2 . " - "; //24
// echo $num1 /= $num2 . " - "; //1.5
// echo $num1 %= $num2 . " - "; //2
// echo $num1 **= $num2 . " - "; //2

//Comparison Opr (>, <, >=, <=, ==, ===, !=, !==)
// if($num1 !== $num2){
//     echo "Yes Num1 is Equal";
// }
// else{
//     echo "No Num1 is Not Equal";
// }

$age = 19;
$cnic = false;

// if($age >= 18 && $cnic == true){
//     echo "you are eligible for Vote";
// }
// else{
//     echo "not Eligible";
// }


$per = -5;

// if($per >= 80 && $per <= 100){
//     echo "A+";
// }
// else if($per >= 70 && $per <= 79){
//     echo "A";
// }
// else if($per >= 60 && $per <= 69){
//     echo "B";
// }
// else if($per >= 50 && $per <= 59){
//     echo "C";
// }
// else if($per >= 40 && $per <= 49){
//     echo "D";
// }
// else if($per <= 39 && $per >= 0){
//     echo "FAIL";
// }
// else{
//     echo "Invalid Percentage";
// }

//Ternary Opr (? :)

$name = "Ahmed";

$user = ($name) ? "Welcome " . $name : "Welcome Guest";
// echo $user;

// if($name){
//     echo "Welcome " . $name;
// }
// else{
//     echo "Welcome Guest";
// }

$day = 2;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    
    default:
        echo "Invalid Day";
        break;
}

?>