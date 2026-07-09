<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
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
        <input type="text" name="cn"> <br>
        <input type="submit" value="Add Category" name="add">
    </form>
</body>
</html>

<?php 
if(ISSET($_POST['add'])){
    $cat_name = $_POST['cn'];

    $insert = "INSERT INTO `category`(`category_name`) VALUES ('$cat_name')";

    $done = mysqli_query($conn, $insert);

    if($done){
        echo "Record Inserted";
    }

}

?>