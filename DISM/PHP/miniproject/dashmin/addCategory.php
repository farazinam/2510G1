<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";
?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Category</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="cn">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="add">Add Category</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->

<?php 
include "footer.php";

if(ISSET($_POST['add'])){
    $cat_name = $_POST['cn'];

    $insert = "INSERT INTO `category`(`category_name`) VALUES ('$cat_name')";

    $done = mysqli_query($conn, $insert);

    if($done){
        echo "Record Inserted";
    }

}

?>
