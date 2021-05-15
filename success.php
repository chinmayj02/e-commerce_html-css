<?php
	require 'includes/common.php';
    if(!isset($_SESSION["email"])){
		header("location: index.php");
	}
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Success</title>
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
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary panel-align">
                        <div class="panel-heading">
                            <h4 id="success-title">Congratulations!</h4>
                        </div>
                        <div class="panel-body">
                            <div class="text-warning">
                                Your Order Is Successfully Placed.<br>
                                Thank You For Shopping With Us.
                            </div>
                            <div class="btn btn-primary btn-block"><a href="products.php" class="continue">Continue Shopping</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>