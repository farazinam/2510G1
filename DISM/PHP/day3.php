<?php

//Math Function
// echo abs(-5);
// echo sqrt(81);
// echo round(7.2);
// echo floor(2.9);
// echo ceil(2.1);
// echo round(7.6);
// echo rand(1,10);
// echo min(1,10,3,7);
// echo max(1,10,3,7);

// define("my_name", "Faraz Inam");
// echo my_name;

// echo __LINE__;
// echo __FILE__;
// echo __DIR__;

class Student {
    function abc(){
        // echo __FUNCTION__;
        echo __CLASS__;
        // echo __METHOD__;
    }
}

$std = new Student();
// $std->abc();

$city = "Karachi";
$_city = "Lahore";
$city1 = "Islamabad";
$myNameIs = "Ali";
$MyNameIs = "Bilal";
// echo $city;
// echo $_city;
// echo $city1;
// $my-name-is = "Faraz";
// $1name = "Faraz";

$name = "Ahmed";
$NAME = "Arham";
$Name = "Daniyal";

// echo $name;
// echo $Name;
// echo $NAME;

//local Variable
function localVariable(){
    $productName = "Mobile";
    echo $productName;
}

// localVariable();

// echo $productName;   //error



//Global Variable
$productName = "Laptop";

function glovalVariable(){
    global $productName;
    echo $productName;
}

// glovalVariable();
// echo $productName;


// localVariable();
// glovalVariable();


//parametarize function
function student($s){
    echo "Welcome " . $s;
}
// student("Hashir");

$greet = "Hello PHP";

if(preg_match("/PHP1/", $greet)){
    echo "Data Found";
}
else{
    echo "Not Found";
}


?> 