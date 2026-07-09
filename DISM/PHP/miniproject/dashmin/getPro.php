<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if(ISSET($_POST['add'])){
    $pro_name = $_POST['pn'];
    $pro_price = $_POST['pp'];
    $pro_desc = $_POST['pd'];

    $pro_img = $_FILES['pi'];
    $img_name = $pro_img['name'];
    $img_tmpname = $pro_img['tmp_name'];

    $img_path = 'images/' . $img_name;

    move_uploaded_file($img_tmpname, $img_path);
    
    
    $insert = "INSERT INTO `product`(`product_name`, `product_price`, `product_description`, `product_image`) 
    VALUES ('$pro_name','$pro_price','$pro_desc','$img_name')";

    $done = mysqli_query($conn, $insert);

    if($done){
        echo "Record Inserted";
    }

}
?>