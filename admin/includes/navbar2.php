<?php

if(session_id() == '') {
  session_start();
}

?>


<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>ThinkTank</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

	   <!----favicon setting
	<link rel="shortcut icon" type="text/css" href="img/logo.png">-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script src="js/contactusform.js"></script>
	<script src="js/form.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navbar
{
	padding: 18px 0px;
	 
	background-color:  #111e2d !important;
	
	border-bottom: none !important;
	transition: all 0.5s ease-in-out; 
	

}
ul li a
{
	color: white !important;
	font-weight: bold;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 1px;
	transition: all 0.5s ease-in;
}

ul li a:hover
{
	color: deepskyblue !important;
	font-size: 14px ;
}

.navbar-toggle
{
	border:1px solid white !important;
	transition: all 0.5s ease-in;
}
.navbar-toggle:hover
{
	background-color:deepskyblue !important;
}

#our-location
{
	border: 1px solid white ;
	border-radius: 45px;
	padding: 12px 12px 12px 12px;
	
	background: deepskyblue !important;

}
#our-location:hover
{
	background-color: white !important;
	
}

.navbar-inverse
{
	background-color: #111e2d !important;
	
}




#loading
{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: #fff;
	
	
	z-index: 99999;
}

/*=======================================
       Navigation Properties ends
==========================================*/


/*=======================================
  Sticky Navigation with background color
==========================================*/

.secondary
{
	background-color:#111e2d !important;
}



/*=======================================
      Sticky Navigation Properties ends
==========================================*/




</style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<h1 style="color: white;margin-top: 10px;" id="myhead">ThinkTank</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#work">Works</a></li>
					<li> <a href="#team_Section">Team</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li id="logout" style="color:red;"><a href="logout.php">LogOut</a></li>
					<li> <a href="profile.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a>
				<!---Profile.php--->
				</li>
					

				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
  
</div>
</body>
</html>
