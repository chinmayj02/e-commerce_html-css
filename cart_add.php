<?php
    require "includes/common.php";
    $product_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $insert = "insert into users_products(user_id, product_id, status) values ('$user_id', '$product_id', 'Added to cart')";
    $submit = mysqli_query($conn,$insert) or die(mysqli_error($conn));
    header('location: products.php');
?>