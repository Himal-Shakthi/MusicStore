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

    <title>Tunes.lk | Shop</title>

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
									<li><a href="../user/user.php">Profile</a></li>
									<li><a href="../shopcart/cart.php">Shopping Cart</a></li>
									</br>
									<li><a href="logout.php">Logout</a></li>
								  </ul>
						</div>
				   </li>
				   
				   
				</div>
				   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    </br></br></br>
	<div class="container">

        <div class="row">

            <div class="col-md-3">
                <a onclick="window.location='../index.html';" class="lead">Tunes.lk</p></a>
                <div class="list-group">
                    <form method="POST">
						<input type="text" class="form-control" name="searchs" placeholder="Search by song" >
						</br>
					
						<input type="text" class="form-control" name="searcha" placeholder="Search by Artist" >
						</br>
						<input type="submit" value="Search" class="btn btn-success btn-sm">
					<form>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/3.jpg" alt="">
                                </div>
								<div class="item">
                                    <img class="slide-image" src="img/4.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

				
				
                <div class="row">
				
				<?php
				
					if($_SERVER["REQUEST_METHOD"] == "POST")
					{
					$skey1=$_POST['searchs'];
					$skey2=$_POST['searcha'];
										
					$querys="SELECT * FROM song WHERE sname LIKE '%$skey1%' OR aname LIKE'%skey2%'";	
					$results=mysqli_query($db,$querys);
					
					while($row1=mysqli_fetch_array($results))
					{	
					echo "
                    <div class='col-sm-4 col-lg-4 col-md-4'>
                        <div class='thumbnail'>
                            <img src='img/music.png'>
                            <div class='caption'>
							
                                <h4 class='pull-right'>$ " . $row1[5] . " </h4>
                                <h4>" . $row1[1] . " </a>
                                </h4>
								<h6> By " . $row1[2] . "
                                </h6>
								<h6> Genre :  " . $row1[4] . "
                                </h6>
                                <p>it was record live at the mandalay Bay Events center.</p>
								<input type='submit' class='btn btn-success' value='Add to cart'>
							</div>
                            </br>
                        </div>
                    </div>";
					}
					
					}
					else
					{
					$query1="Select * from song";
					$result1=mysqli_query($db,$query1);
					
					while($row1=mysqli_fetch_array($result1))
					{	
					echo "
                    <div class='col-sm-4 col-lg-4 col-md-4'>
                        <div class='thumbnail'>
                            <img src='img/music.png'>
                            <div class='caption'>
							
                                <h4 class='pull-right'>$ " . $row1[5] . " </h4>
                                <h4>" . $row1[1] . " </a>
                                </h4>
								<h6> By " . $row1[2] . "
                                </h6>
								<h6> Genre :  " . $row1[4] . "
                                </h6>
                                <p>it was record live at the mandalay Bay Events center.</p>
								<input type='submit' class='btn btn-success' value='Add to cart'>
							</div>
                            </br>
                        </div>
                    </div>";
					}
					}
                 ?>   
							
                   

                </div>

            </div>

        </div>

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
