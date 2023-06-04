<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Products CRUD</title>
</head>

<body>

    <div class="container">
        <?php include('admin-header.php'); ?>
        <?php include('message.php'); ?>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Details
                            <a href="product-create.php" class="btn btn-primary float-end">Add Product</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM products";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($product = mysqli_fetch_assoc($query_run)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $product['id']; ?>
                                            </td>
                                            <td>
                                                <?= $product['type']; ?>
                                            </td>
                                            <td>
                                                <?= $product['name']; ?>
                                            </td>
                                            <td>
                                                <?php if (!empty($product['img']) && file_exists($product['img'])) { ?>
                                                    <img src="<?= $product['img']; ?>" alt="Product Image" class="img-thumbnail"
                                                       >
                                                <?php } else { ?>
                                                    <span class="text-danger">Image Not Found</span>
                                                <?php } ?>
                                            </td>
                                            <td>$
                                                <?= $product['price']; ?>
                                            </td>
                                            <td>
                                                <a href="product-edit.php?id=<?= $product['id']; ?>"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_product" value="<?= $product['id']; ?>"
                                                        class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<h5>No Record Found</h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>