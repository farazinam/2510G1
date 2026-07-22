<?php 
$conn = mysqli_connect("localhost", "root", "", "ecommerce");


$getId = $_GET['id'];

$del = "DELETE FROM `role` WHERE role_id = '$getId'";
$done = mysqli_query($conn, $del);

if($done){
    // echo "Record Deleted";
    echo "<script>
    alert('Record Deleted');
    window.location.href = 'viewRole.php';
    </script>";
}
?>