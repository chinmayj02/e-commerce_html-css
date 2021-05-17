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
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                    $sum = 0;
                    ?>
        <div class="container panel-margin">
            <table class="table table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($check)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $sum += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=$row['id']" class='remove_item_link'>Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td>Total:</td>
                    <td>Rs.<?php echo $sum; ?></td>
                    <td><a href="success.php?id=$row['id']" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>