<?php

// ------ Loops --------

// ----------- While Loop ------------
// $num1 = 1;
// while($num1 <= 10){
//     echo $num1;
//     $num1++;
// }

// $num2 = 1;
// while($num2 < 1){
//     echo $num2;
//     $num2++;
// }

// ------------ Do While -------------
// $num3 = 1;
// do{
//     echo $num3;
//     $num3++;
// }
// while($num3 < 1);

// ------------- For Loop ---------------
// for($num4 = 1; $num4 <= 10; $num4++){
//     echo $num4;
// }

// $table = 13;
// for($n = 1; $n <= 10; $n++){
//     echo $table . " X " . $n . " = " . $table*$n . "<br>";
// }

// --------------Nested For Loop ----------
// for($i = 1; $i <= 10; $i++){
//     for($j = 1; $j <= $i; $j++){
//         echo "😎";
//     }
//     echo "<br>";
// }

// -------------- For Each --------------
// $fruits = ["Mango", "Orange", "Apple", "PineApple"];

// foreach($fruits as $f){
//     echo $f;
// }

// -------------- Jump Statement --------------

// ------ Break-----
// for($x = 1; $x <= 10; $x++){
//     if($x == 7){
//         break;
//     }
//     echo $x;
// }

// ------ Continue-----
// for($x = 1; $x <= 10; $x++){
//     if($x == 7){
//         continue;
//     }
//     echo $x;
// }

for($x = 1; $x <= 10; $x++){
    if($x % 2 == 0){
        continue;
    }
    echo $x;
}

?>