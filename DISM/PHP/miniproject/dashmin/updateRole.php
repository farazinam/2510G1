<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$getId = $_GET["id"];

$sel = "SELECT * FROM `role` WHERE role_id = '$getId'";
$q = mysqli_query($conn, $sel);

$fetch = mysqli_fetch_array($q);
?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Edit Role</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Role Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="rn" value="<?php echo $fetch['role_name'] ?>">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="update">Update Role</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->

<?php 
include "footer.php";

if(ISSET($_POST['update'])){
    $role_name = $_POST['rn'];

    $insert = "UPDATE `role` SET `role_name`='$role_name' WHERE role_id = '$getId'";

    $done = mysqli_query($conn, $insert);

    if($done){
        // echo "Record Updated";
        echo "<script>
    alert('Record Updated');
    window.location.href = 'viewRole.php';
    </script>";
    }
}
?>
