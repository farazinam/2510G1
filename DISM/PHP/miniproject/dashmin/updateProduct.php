<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$getId = $_GET["id"];

$sel = "SELECT * FROM product WHERE product_id = '$getId'";
$q = mysqli_query($conn, $sel);

$fetch = mysqli_fetch_array($q);
?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Update Product</h6>
                            <form method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pn" value="<?php echo $fetch["product_name"] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pp" value="<?php echo $fetch["product_price"] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pd" value="<?php echo $fetch["product_description"] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pi">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="update">update Product</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->

<?php 
include "footer.php";

if(ISSET($_POST['update'])){
    $pro_name = $_POST['pn'];
    $pro_price = $_POST['pp'];
    $pro_desc = $_POST['pd'];

    $pro_img = $_FILES['pi'];
    $img_name = $pro_img['name'];
    $img_tmpname = $pro_img['tmp_name'];

    $img_path = 'images/' . $img_name;

    if(is_uploaded_file($img_tmpname)){
        move_uploaded_file($img_tmpname, $img_path);
        $update = "UPDATE `product` SET `product_name`='$pro_name',
        `product_price`='$pro_price',`product_description`='$pro_desc',
        `product_image`='$img_name' WHERE product_id = '$getId'";
    
    }
    else{
         $update = "UPDATE `product` SET `product_name`='$pro_name',
        `product_price`='$pro_price',`product_description`='$pro_desc'
         WHERE product_id = '$getId'";
    
    }

        $done = mysqli_query($conn, $update);
    
        if($done){
            echo "Record Updated";
        }
    
    
    
}
?>
