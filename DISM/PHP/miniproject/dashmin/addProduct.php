<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$sel = "SELECT * FROM category";
$q = mysqli_query($conn, $sel);
?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Product</h6>
                            <form method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pn">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pd">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="pi">
                                </div>

                                <select name="cid" class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <?php while($fetch = mysqli_fetch_array($q)){ ?>
                                <option value="<?php echo $fetch["category_id"] ?>"> <?php echo $fetch["category_name"] ?> </option>
                                <?php } ?>
                                </select>
                                
                                <button type="submit" class="btn btn-primary" name="add">Add Product</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->

<?php 
include "footer.php";

if(ISSET($_POST['add'])){
    $pro_name = $_POST['pn'];
    $pro_price = $_POST['pp'];
    $pro_desc = $_POST['pd'];
    $cat_id = $_POST['cid'];

    $pro_img = $_FILES['pi'];
    $img_name = $pro_img['name'];
    $img_tmpname = $pro_img['tmp_name'];

    $img_path = 'images/' . $img_name;

    move_uploaded_file($img_tmpname, $img_path);
    
    $insert = "INSERT INTO `product`(`product_name`, `product_price`, `product_description`, `product_image`, `category_id`) 
    VALUES ('$pro_name','$pro_price','$pro_desc','$img_name', '$cat_id')";

    $done = mysqli_query($conn, $insert);

    if($done){
        echo "Record Inserted";
    }

}
?>
