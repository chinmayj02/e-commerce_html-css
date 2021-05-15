<?php
	require 'includes/common.php';
    $user_id = $_SESSION['id'];
    $product_id = $_GET['id'];
    $deletion = "delete from users_products where user_id = '$user_id' and item_id = '$item_id'";
    $submit = mysqli_query($conn,$deletion) or die(mysqli_error($conn));
    header("location: cart.php");
?>