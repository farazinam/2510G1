<?php 
$conn = mysqli_connect("localhost", "root", "", "ecommerce");


$getId = $_GET['id'];

$del = "DELETE FROM product WHERE product_id = '$getId'";
$done = mysqli_query($conn, $del);

if($done){
    // echo "Record Deleted";
    echo "<script>
    alert('Record Deleted');
    window.location.href = 'viewProduct.php';
    </script>";
}
?>