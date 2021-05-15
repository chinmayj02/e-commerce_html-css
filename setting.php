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
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li><a href="signup.php" target="_self"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="index.php" target="_self"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container panel-margin panel-body-form">
			<div id="panel-s">
				<div class="panel-heading">
					<h2 class="panel-title">Change Password</h2>
				</div>
				<div >
					<form>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="old-password" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="new-password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="retyped-password" placeholder="Re-type New Password">
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary signup-btn"><a href="index.php">Change</a></button>
				</div>
                </div>
                </div>
                <?php 
                include "includes/footer.php";
            ?> 
    </body>
</html>