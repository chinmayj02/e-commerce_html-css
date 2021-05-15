<?php
    $conn = mysqli_connect("localhost", "root", "serverpass123", "e-commerce") or die(mysqli_error($conn));
    if(!isset($_SESSION)){
        session_start();
    }
?>