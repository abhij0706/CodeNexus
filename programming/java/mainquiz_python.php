<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library --->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">  -->

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}



		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			
			border-color: black;


		}
		.content
		{
			color: black !important;
		}

		#frame
		{
			width:1460px;
           height:800px;
           margin-left: 250px;
           background-color: ;
		}

	</style>
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;font-family: Brush Script MT, Brush Script Std, cursive;" id="myhead">CodeNexus</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
				<li> <a href="../../index.php">Home</a></li>
					<li> <a href="../../index.php#myservice_section">Our Service</a></li>
					<li> <a href="../../index.php#myfaq">FAQ</a></li>
					<li> <a href="../../logout.php">Logout</a></li>
					<li> <a href="" id="our-location" class="btn-success" data-toggle="modal"><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->
		 
	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			


<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

  ?>	  	
       <ul>	

	        <button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 250px; color:black; font-size:20px; background-color:red;">PYTHON</li></button>	
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="qq/check_quiz_value_p.php?qid=0" target="frame" style="color: white;"><li style="width: 250px;">Introduction</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="qq/check_quiz_value_p.php?qid=1" target="frame" style="color: white;"><li style="width: 250px;">Environment Setup</li></a></button>
            <button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="qq/check_quiz_value_p.php?qid=2" target="frame" style="color: white;"><li style="width: 250px;">Variable</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="qq/check_quiz_value_p.php?qid=3" target="frame" style="color: white;"><li style="width: 250px;">Looping Statment</li></a></button>
		</ul>
</div>
<div>
<iframe src="" class="frame" id="frame" name="frame" height="100px" width="200px">

</iframe>
	</div>

	

 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>