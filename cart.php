<?php
    require 'includes/common.php';
    if(!isset($_SESSION["email"])){
		header("location: login.php");
	}	
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
        <?php 
            $user_id = $_SESSION['id'];
            $fetch = "select p.id,p.name,p.price from products p inner join users_products up on p.id = up.product_id";
            $check = mysqli_query($conn,$fetch) or die(mysqli_error($conn));
            if(mysqli_num_rows($check) == 0){
                echo '  <div class="container">
                <div class="row row_style">
                    <div class="col-xs-6">
                        <div class="panel panel-primary panel-align">
                        <div class="panel-heading">
                        <h4 id="success-title">Cart Empty</h4>
                        </div>
                         <div class="panel-body">
                         <div class="text-warning">
                        Your Cart Is Currently Empty!
                        </div>
                    <div class="btn btn-primary btn-block"><a href="products.php" class="continue">Click To Continue Shopping</a></div>
                </div>
            </div>
            </div>
            </div>
            </div>';
            die();
            }else{
                    $sum = 0;
            } ?>
        <div class="container panel-margin">
            <table class="table table-hover">
                <tr>
                    <th>Unique Item Number</th>
                    <th>Item Name</th>
                    <th>Price (in Rupees)</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($check)){ ?>
                <tr>
                    <td><?php $product_id = $row['id']; echo $product_id ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php $sum += $row['price']; echo $row['price'] ?></td>
                    <td><a href="cart_remove.php?id=1" class="btn btn-danger btn-block">Remove</a></td>
                </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td>Total:</td>
                    <td><?php echo $sum; ?></td>
                    <td><a href="success.php?id=$row['id']" class="btn btn-primary btn-block">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>