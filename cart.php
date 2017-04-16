<?php
	include ('lock.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <a href="../shop/store.php"> back to shop </a>                
                   <li>
						<div class="dropdown">
							<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="../cart/cart.php">Shop</a></li>
									<li><a href="logout.php">Logout</a></li>
								  </ul>
						</div>
				   </li>
				   
				   
			</div>
				   
                </ul>
            </div>
            
        
       
    </nav>

    <!-- Page Content -->
    <div class="container">
	
	
	
	<?php
	
		$user=$_SESSION['login_user'];
		$query1="SELECT * FROM cart WHERE user='$user'";
		$result1=mysqli_query($db,$query1);

		if (!$result1)
		{
			
			die(mysqli_error($db));
			
		}
		
			
		echo "</br></br></br></br>";
		echo "<table class='table'><tr><th>Item ID</th><th>Name</th><th>Price</th><th>Action</th></tr>";
		
		while($row1=mysqli_fetch_array($result1))
		{	
			echo "</br></br></br></br></br>";
			echo "<tr>";
			echo " <td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td><input type='button' onclic='remove()' value='Remove'></td>";
			echo "</tr>" ;
			
			$row2=mysqli_fetch_array($result1);
			
			$pri=$row2[3];
			
			$tot = $tot+$pri;
			
		}
		echo "</table>";
		
		echo "<h6> Total Price : " . $tot;
		
		
	
	?>
	
	
	
	
	
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer align="center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; tunes.lk</p>
                </div>
            </div>
        </footer>

    </div>
    

</body>

</html>
