<?php
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}
	require "includes/common.php";
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Lifestyle Store</title>
    <meta name="description" content="">
    <meta name="author" content="Chinmay Joshi">
    <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <?php 
                require "includes/header.php";
            ?>
        </header>
           <div id="banner-image">
               <div class="container">
                <div id="banner-content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
               </div>
           </div>
           <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>