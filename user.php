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
									<li><a href="../shopcart/cart.php">Shop</a></li>
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
	
	<img src="img/1.png">
	
	<?php
	
		$user=$_SESSION['login_user'];
		$query1="SELECT * FROM member WHERE email='$user'";
		$result1=mysqli_query($db,$query1);

		if (!$result1)
		{
			
			die(mysqli_error($db));
			
		}
		
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$pass=$_POST['pass'];
			$rpass=$_POST['rpass'];
			$user=$_SESSION['login_user'];
			
			if($pass===$rpass && !empty($_POST['pass']) && !empty($_POST['rpass']))
			{
					$sql="UPDATE member SET password='$pass' WHERE email='$user'";
					mysqli_query($db,$sql);
			}
		}	
		
		echo "<table class='table'><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Country</th></tr>";
		
		while($row1=mysqli_fetch_array($result1))
		{	
			echo "</br></br></br></br></br>";
			echo "<tr>";
			echo " <td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td>$row1[4]</td>";
			echo "</tr>" ;
			
		}
		echo "</table>";
		
		function delete($row)
		{
			$query4="DELETE FROM member WHERE email='$row'";
			mysqli_query($db,$query4);
			
			if (!$result4)
				{
					die(mysqli_error());
				} 
		}
	
	?>
	
	<form method='POST' action="user.php">
				<div class='col-sm-5'>
					<input name='pass' class='form-control' id='focusedInput' type='text' placeholder='New Password'>
				</div>
				<div class='col-sm-5'>
					<input name='rpass' class='form-control' id='focusedInput' type='text' placeholder='Confirm New Password'>
				</div>
				
				<input type='submit' class='btn btn-success' value='Reset Password'>
	</form>
	
	
	
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
