<?php
    require 'includes/common.php';
    if(!isset($_SESSION["email"])){
    header("location: index.php");}
    $old_password = $_POST['old_password'];
    $safe_old_pass = md5($old_password);
    $new_password = $_POST['new_password'];
    $safe_new_pass = md5($new_password);
    $retyped_new_pass = $_POST['retyped_password'];
    $safe_retyped_pass = md5($retyped_new_password);
    $select = "select password from users where id = '{$_SESSION['id']}' and email = '{$_SESSION['email']}'";
    $submit = mysqli_query($conn,$select) or die(mysqli_error());
    $row = mysqli_fetch_array($submit);
    $password = $row['password'];
    $update = "update users u set password = '$safe_new_pass' where u.id = '{$_SESSION['id']}' and u.password = '$safe_old_pass'";

    die($old_password);

    if(($safe_new_pass===$safe_retyped_pass) && ($safe_old_pass===$password)){
        $submit_update = mysqli_query($conn,$update) or die(mysqli_error());
		$_SESSION['id'] =  mysqli_insert_id($conn);
		header("location: index.php");
    }else{
        die("ERROR. KINDLY CHECK YOUR ENTERED PASSWORD AGAIN");
    }
?>