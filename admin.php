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
                                    
                   <li>
						<div class="dropdown">
							<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
								  </button>
								  <ul class="dropdown-menu">
									
									<li><a href="logout.php">Logout</a></li>
								  </ul>
						</div>
				   </li>
				   
				   
			</div>
				   
                </ul>
            </div>
            
        </div>
       
    </nav>

    <!-- Page Content -->
    <div class="container">
	<?php
		$query1="SELECT * FROM member ";
		$result1=mysqli_query($db,$query1);

		if (!$result1)
		{
			
			die(mysqli_error($db));
			
		}
		
		echo "</br></br></br></br></br></br>";
		echo"<h2> User Management </h2>";
		echo"<table class='table'><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Country</th><th>Action</th></tr>";


		while($row1=mysqli_fetch_array($result1))
		{	
			
			echo "<tr>";
			echo " <td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td>$row1[4]</td><td><input type='submit' name='delete' onclick=deletem(";
			echo $row1[2];
			echo") value='delete'</td></tr>" ;
			
		}
		echo"</table>";
		
		function delete($row)
		{
			$query4="DELETE FROM member WHERE email='$row'";
			mysqli_query($db,$query4);
			
			if (!$result4)
				{
					die(mysqli_error());
				} 
		}
		
		$query2="SELECT * FROM song ";
		$result2=mysqli_query($db,$query2);
		
		echo "</br></br></br>";
		echo"<h2> Product Management </h2>";
		echo"<table class='table'><tr><th>Song ID</th><th>Song Name</th><th>Artist Name</th><th>Album</th><th>Genre</th><th>Price $ </th><th>Action</th></tr>";


		while($row2=mysqli_fetch_array($result2))
		{	
			
			echo "<tr>";
			echo " <td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td><input type='submit' name='delete' onclick=deletem(";
			echo $row2[2];
			echo") value='delete'</td></tr>" ;
			
		}
		echo"</table>";
		
		echo "</br></br></br>";
		echo "<h2> Add Products </h2>";
		
		echo "<form method='post'>
				<div class='col-sm-5'>
					<input name='sid' class='form-control' id='focusedInput' type='text' placeholder='Song ID'>
				</div>
				<div class='col-sm-5'>
					<input name='sname' class='form-control' id='focusedInput' type='text' placeholder='Song Name'>
				</div>
				</br>
				<div class='col-sm-5'>
					<input name='aname' class='form-control' id='focusedInput' type='text' placeholder='Artist name'>
				</div>
				<div class='col-sm-5'>
					<input name='alname' class='form-control' id='focusedInput' type='text' placeholder='Album name'>
				</div>
				</br>
				<div class='col-sm-5'>
					<input name='genre' class='form-control' id='focusedInput' type='text' placeholder='Genre'>
				</div>
				<div class='col-sm-5'>
					<input name='price' class='form-control' id='focusedInput' type='text' placeholder='price'>
				</div>
			
					<input type='submit' class='btn btn-success' value='submit'>
				";
				
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
				$sid=$_POST['sid'];
				$sname=$_POST['sname'];
				$aname=$_POST['aname'];
				$alname=$_POST['alname'];
				$genre=$_POST['genre'];
				$price=$_POST['price'];
				
				$sql="INSERT INTO  song VALUES ('$sid','$sname','$aname','$alname','$genre','price')";	
				mysqli_query($db,$sql);
				}
	?>

		
		
    </div>

    
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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
