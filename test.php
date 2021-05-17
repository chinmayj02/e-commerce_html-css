<?php
	require 'includes/common.php';
	if(!isset($_SESSION['email'])){
		header("location: login.php");
	}
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Products</title>
    <meta name="description" content="">
    <meta name="author" content="Chinmay Joshi">
    <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
		<?php 
            require "includes/header.php";
			include "includes/check_if_added.php";
        ?>
        </header>
        <div class="container panel-margin">
			<div class="jumbotron">
				<h1>Welcome to our Lifestyle Store!</h1>
				<p class="text-lighter">We have the best cameras, watches and shirts for you. No need to hunt
					around, we have all in one place.
				</p>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/5.jpg" alt="cannon eos">
						<div class="caption">
							<h3>Cannon EOS</h3>
							<p>Price: Rs.36000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/2.jpg" alt="sony dslr">
						<div class="caption">
							<h3>Sony DSLR</h3>
							<p>Price: Rs.40000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/3.jpg" alt="sony dslr">
						<div class="caption">
							<h3>Sony DSLR</h3>
							<p>Price: Rs.50000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/4.jpg" alt="olympus dslr">
						<div class="caption">
							<h3>Olyumpus DSLR</h3>
							<p>Price: Rs.80000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/9.jpg" alt="titan model 301">
						<div class="caption">
							<h3>Titan Model #301</h3>
							<p>Price: Rs.13000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/10.jpg" alt="titan model 201">
						<div class="caption">
							<h3>Titan Model #201</h3>
							<p>Price: Rs.3000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/11.jpg" alt="hmt milan">
						<div class="caption">
							<h3>HMT Milan</h3>
							<p>Price: Rs.8000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/12.jpg" alt="faber luba 111">
						<div class="caption">
							<h3>Faber Luba #111</h3>
							<p>Price: Rs.18000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/8.jpg" alt="h&w">
						<div class="caption">
							<h3>H&W</h3>
							<p>Price: Rs.800.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/6.jpg" alt="loui phil">
						<div class="caption">
							<h3>Louis Phil</h3>
							<p>Price: Rs.1000.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/13.jpg" alt="john zok">
						<div class="caption">
							<h3>John Zok</h3>
							<p>Price: Rs.1500.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/14.jpg" alt="jhalsani">
						<div class="caption">
							<h3>Jhalsani</h3>
							<p>Price: Rs.1300.00</p>
							<?php 
							if(!isset($_SESSION['email'])){ ?>
								<a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
							<?php } else {
							     if(check_if_added_to_cart(1)){ ?>
								 	<button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
								 <?php } else { ?>
									<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								 <?php } 
							}?>
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



<?php
    include "include/common.php" 
    $query = "select * from products";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_fetch_array($result);
    for ($i=1,$i<=mysqli_num_rows($rows);$i++){ ?>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <div><?php echo $rows[i][thumbnail] ?></div>
                <div class="caption">
                    <h3><?php echo $rows[i][name] ?></h3>
                    <p>Price: Rs.<?php echo $rows[i][price] ?></p>
                    <?php 
                    if(!isset($_SESSION['email'])){ ?>
                    <a href="login.php"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                    <?php } else {
                    if(check_if_added_to_cart(1)){ ?>
                        <button type="button" class="btn btn-primary btn-block" disabled>Add to cart</button>
                     <?php } else { ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php } 
                    }?>
                </div>
             </div>
         </div>
    <?php }?>
