<?php
	require 'includes/common.php';
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login</title>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <div class="text-warning">Login to continue</div>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="email" placeholder="Email id">
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="password" placeholder="Password" required>
                                </div>
                               <button type="submit" class="btn btn-primary" value="insert">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account? <a href="signup.php" class="reg">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>