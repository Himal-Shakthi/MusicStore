<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include ('config.php');
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$remail=$_POST['remail'];
		$password=$_POST['password'];
		$rpassword=$_POST['rpassword'];
		$country=$_POST['country'];
		
		if($password===$rpassword && !empty($_POST['password']))
		{
			if($email===$remail && !empty($_POST['email']))
			{
				if(!empty ($_POST['fname']) && !empty ($_POST['lname']) &&!empty ($_POST['country']))
				{
					echo 	"<div class='panel panel-success'>
							<div class='panel-heading'>Success</div>
						<div class='panel-body'>Your I=information successfully submited</div>
						</div>";
						
					$sql="INSERT INTO  member VALUES ('$fname','$lname','$email','$password','$country')";	
					mysqli_query($db,$sql);
					
					$sql1="INSERT INTO  login VALUES ('$email','$password')";	
					mysqli_query($db,$sql1);
				}
				else
				{
					echo 	"<div class='panel panel-danger'>
							<div class='panel-heading'>Warning</div>
						<div class='panel-body'>Make sure all the fields are full</div>
						</div>";
				}
				
			}
			else
			{
					echo 	"<div class='panel panel-danger'>
							<div class='panel-heading'>Warning</div>
						<div class='panel-body'>Make sure enterd emails are valid</div>
						</div>";
			}
		}	
		else
		{
			echo 	"<div class='panel panel-danger'>
						<div class='panel-heading'>Warning</div>
					<div class='panel-body'>Re enter the password and try again.</div>
					</div>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tunes.lk | Sign In</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	
	.bg-1 {
      background-image:url(img/store_3.jpg);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;
      color: #bdbdbd;
	  -webkit-background-size:cover;-moz-background-size:cover;background-size:cover;
	}
	
	.font-style{
		
	}
	
	
	
    </style>

</head>

<body id="page-top" class="bg-1">

   

   
  


   <div id="register" >
   </br></br>
   <div class="container">
   <div class="well">
	
		
		</br>
		<form method="POST" action="" class="form-horizontal">
			
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-2 control-label"> Name : </label>
						<div class="col-sm-3">
							<input name='fname' class="form-control" id="focusedInput" type="text" placeholder="Enter your first name">
						</div>
					
						<div class="col-sm-3">
							<input name='lname' class="form-control" id="focusedInput" type="text" placeholder="Enter your last name">
						</div>
				</div>
				</div>
				
				</br>
				<div class="form-group">
					<label class="col-sm-3 control-label"> Email : </label>
					<div class="col-sm-5">
							<input name='email' class="form-control" id="focusedInput" type="text" placeholder="Enter your email">
					</div>
				</div>	
				
				<div class="form-group">
					<label class="col-sm-3 control-label"> Confirm Email : </label>
					<div class="col-sm-5">
							<input name='remail' class="form-control" id="focusedInput" type="text" placeholder="Re enter your email">
					</div>
				</div>
				
				</br></br>
				
				<div class="form-group">
					<label  class="col-sm-3 control-label"> Password : </label>
					<div class="col-sm-3">
							<input name='password' class="form-control" id="focusedInput" type="password" placeholder="Password">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label"> Confirm Password : </label>
					<div class="col-sm-3">
							<input name='rpassword' class="form-control" id="focusedInput" type="password" placeholder="Re enter password">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label"> Country : </label>
					<div class="col-sm-3">
							<input name='country' class="form-control" id="focusedInput" type="text" placeholder="Enter the Country">
					</div>
				</div>
				
				
			</br></br>
			
			<div class="col-md-3 col-md-push-7")
				<div class="form-group">
				
				<input type="submit" class="btn btn-primary btn-lg" value="submit" align="center")
				
				</div>
			</div>	
		
		    </br></br></br></br></br></br></br></br>	
		
			</div>
			
			
			</div>
		</form>	
		

   
	<footer>
	<p> Copyright Tunes.lk</p>
	</footer>
   
    
   

</body>

</html>
