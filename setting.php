<?php
	require 'includes/common.php';
    if(!isset($_SESSION["email"])){
		header("location: index.php");}
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Settings</title>
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
        <div class="container panel-margin panel-body-form">
			<div id="panel-s">
				<div class="panel-heading">
					<h2 class="panel-title">Change Password</h2>
				</div>
				<div >
					<form method="post" action="setting_script.php">
                        <div class="form-group">
                            <input type="password"  class="form-control" name=1 placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name=2 placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name=3 placeholder="Re-type New Password" required>
                        </div>
                    </form>
                   <a href="setting_script.php"> <button type="submit" class="btn btn-primary signup-btn">Change</button></a>
				</div>
                </div>
                </div>
                <?php 
                include "includes/footer.php";
            ?> 
    </body>
</html>