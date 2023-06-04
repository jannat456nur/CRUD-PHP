<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_product'])) {
    $product_id = mysqli_real_escape_string($con, $_POST['delete_product']);

    $query = "DELETE FROM products WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Product Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Product Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if (isset($_POST['update_product'])) {
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $type = mysqli_real_escape_string($con, $_POST['type']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $img = mysqli_real_escape_string($con, $_POST['img']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "UPDATE products SET type='$type', name='$name', img='$img', price='$price' WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Product Updated Successfully";
        header("Location: admin.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Product Not Updated";
        header("Location: admin.php");
        exit(0);
    }
}


if (isset($_POST['save_product'])) {
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $img = mysqli_real_escape_string($con, $_POST['img']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "INSERT INTO products (type, name, img, price) VALUES ('$type', '$name', '$img', '$price')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Product Created Successfully";
        header("Location: product-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Product Not Created";
        header("Location: product-create.php");
        exit(0);
    }
}

?>