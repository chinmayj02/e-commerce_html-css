<?php
	require 'includes/common.php';
    $user_id = $_SESSION['id'];
    $product_id = $_GET['id'];
    die($product_id);
    $deletion = "delete from users_products where user_id = '$user_id' and product_id = '$product_id'";
    $submit = mysqli_query($conn,$deletion) or die(mysqli_error($conn));
    header("location: cart.php");
?>