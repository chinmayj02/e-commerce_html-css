<?php
    function check_if_added_to_cart($product_id){
        require 'common.php';
        $user_id = $_SESSION["id"];
        $query = "SELECT * FROM users_products WHERE product_id = '$product_id' AND user_id = '$user_id' AND status = 'Added to cart'";
        $query_result = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_result) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>