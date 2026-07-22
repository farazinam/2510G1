<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$sel =  "SELECT * FROM users
INNER JOIN `role`
ON role.role_id = users.role_id";

$q = mysqli_query($conn, $sel);
?>

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Users</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">User Id</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while($fetch = mysqli_fetch_array($q)){
                                    ?>
                                    <tr>
                                        <th scope="row"> <?php echo $fetch['user_id'] ?> </th>
                                        <td> <?php echo $fetch['username'] ?> </td>
                                        <td> <?php echo $fetch['email'] ?> </td>
                                        <td> <?php echo $fetch['password'] ?> </td>
                                        
                                        <td> <?php echo $fetch['role_name'] ?> </td>
                                        <td>
                                            <a href="updateProduct.php?id=<?php echo $fetch['user_id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="deleteProduct.php?id=<?php echo $fetch['user_id'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
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