<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$sel = "SELECT * FROM `role`";
$q = mysqli_query($conn, $sel);
?>

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Role</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Role Id</th>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while($fetch = mysqli_fetch_array($q)){
                                    ?>
                                    <tr>
                                        <th scope="row"> <?php echo $fetch['role_id'] ?> </th>
                                        <td> <?php echo $fetch['role_name'] ?> </td>
                                        <td>
                                            <a href="updateRole.php?id=<?php echo $fetch['role_id'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="deleteRole.php?id=<?php echo $fetch['role_id'] ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Table End -->

<?php
include "footer.php";
?>