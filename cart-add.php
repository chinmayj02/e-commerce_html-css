<?php
    require "includes/common.php";
    $product_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $insert = "insert into user_products(user_id, product_id, status) values('$user_id', '$item_id', 'Added to cart')";
    $submit = mysqli_query($conn,$insert);
    header('location: products.php');
?>