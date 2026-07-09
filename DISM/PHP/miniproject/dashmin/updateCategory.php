<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$getId = $_GET["id"];

$sel = "SELECT * FROM category WHERE category_id = '$getId'";
$q = mysqli_query($conn, $sel);

$fetch = mysqli_fetch_array($q);
?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Edit Category</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="cn" value="<?php echo $fetch['category_name'] ?>">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="update">Update Category</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->

<?php 
include "footer.php";

if(ISSET($_POST['update'])){
    $cat_name = $_POST['cn'];

    $insert = "UPDATE `category` SET `category_name`='$cat_name' WHERE category_id = '$getId'";

    $done = mysqli_query($conn, $insert);

    if($done){
        // echo "Record Updated";
        echo "<script>
    alert('Record Updated');
    window.location.href = 'viewCategory.php';
    </script>";
    }
}
?>
