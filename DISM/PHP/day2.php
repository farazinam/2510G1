<?php

$age = 22;
$city = "Karachi";
$isEligible = true;
$height = 5.2;
$n = null;
$a;

// echo $age;
// echo $city;
// echo $isEligible;
// echo $height;
// echo $n;

//Array

$names = array("Ali", "Ahsan", "Ahmed", "Ahram"); //constructor
$age = [2, 4, 6, 8]; //literal syntax

// echo $age[2];

// echo $names[0];
// echo $names[1];
// echo $names[2];
// echo $names[4];

// echo $names;
// foreach($names as $n) {
//     echo $n;
// }


class Car {
    public $model = 2026;
    public $name = "Corolla";

    function run(){
        echo "Car is Running";
    }
}

// $c = new Car();
// echo $c->name;
// echo $c->model;
// $c->run();

//Null DT
// $n = null;
// var_dump($n);

//Resource
// $file = fopen('basics.php', 'r');
// var_dump($file);

//built-in function

echo strlen("Aptech");
echo str_word_count("Aptech Learning Pakistan");
echo strtoupper("aptech");
echo strtolower("APTECH");
echo str_replace("PHP", "Laravel", "I Love PHP")
?>