<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
include "header.php";

$sel =  "SELECT * FROM product AS p
        INNER JOIN category AS c
        ON c.category_id = p.category_id";

$q = mysqli_query($conn, $sel);
?>

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Product</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Id</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product Description</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while($fetch = mysqli_fetch_array($q)){
                                    ?>
                                    <tr>
                                        <th scope="row"> <?php echo $fetch['product_id'] ?> </th>
                                        <td> <?php echo $fetch['product_name'] ?> </td>
                                        <td> <?php echo $fetch['product_price'] ?> </td>
                                        <td> <?php echo $fetch['product_description'] ?> </td>
                                        <td> <img src="images/<?php echo $fetch['product_image'] ?>" alt="" width="100px">  </td>
                                        <td> <?php echo $fetch['category_name'] ?> </td>
                                        <td>
                                            <a href="updateProduct.php?id=<?php echo $fetch['product_id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="deleteProduct.php?id=<?php echo $fetch['product_id'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
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