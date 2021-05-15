<?php
	require 'includes/common.php';
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$contact = mysqli_real_escape_string($conn,$_POST['contact']);
	$city = mysqli_real_escape_string($conn,$_POST['city']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$safe_pass = md5($password);
	$insert = "insert into users(name, email, password, contact, city, address) values ('$name','$email','$safe_pass','$contact','$city','$address')";
	$fetch = "select id from users where email = '$email'";
	$check = mysqli_query($conn,$fetch);
	if(mysqli_num_rows($check)>0)
	{
		die("User already exists");
	}
	else
	{
		$submit = mysqli_query($conn,$insert) or die(mysqli_error($conn));
		$_SESSION['email'] = $email;
		$_SESSION['id'] =  mysqli_insert_id($conn);
		header("location: products.php");
	}
?>