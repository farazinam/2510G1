<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

$getId = $_GET["id"];

$sel = "SELECT * FROM category WHERE category_id = '$getId'";
$q = mysqli_query($conn, $sel);

$fetch = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Category Name</label>
        <input type="text" name="cn" value="<?php echo $fetch["category_name"] ?>"> <br>
        <input type="submit" value="Update Category" name="update">
    </form>
</body>
</html>

<?php 
if(ISSET($_POST['update'])){
    $cat_name = $_POST['cn'];

    $insert = "UPDATE `category` SET `category_name`='$cat_name' WHERE category_id = '$getId'";

    $done = mysqli_query($conn, $insert);

    if($done){
        echo "Record Updated";
    }
}
?>