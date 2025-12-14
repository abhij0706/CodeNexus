<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<link rel="shortcut icon" type="text/css" href="../../img/logo2.png">
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
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

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

				<h1 style="color: white;margin-top: 10px;font-family: 'Lobster', cursive;" id="myhead">CodeNexus</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="../../index.php">Home</a></li>
					<li> <a href="../../index.php#myservice_section">Our Service</a></li>

					<li> <a href="../../index.php#myfaq">FAQ</a></li>
					<li> <a href="../../logout.php">Logout</a></li>
					<li> <a href="../../profile.php" id="our-location" class="btn-success" data-toggle="modal"><?php echo $_SESSION['username'];   ?></a></li>
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

	        <button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 250px; color:black; font-size:20px; background-color:red;">QUIZ</li></button>	
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=0" target="frame" style="color: white;"><li style="width: 250px;">Introduction</li></a></button>
            <button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=1" target="frame" style="color: white;"><li style="width: 250px;">Constructor</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=2" target="frame" style="color: white;"><li style="width: 250px;">Datatype</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=3" target="frame" style="color: white;"><li style="width: 250px;">Modifiers</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=4" target="frame" style="color: white;"><li style="width: 250px;">Oprators</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=5" target="frame" style="color: white;"><li style="width: 250px;">Decison Making</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=6" target="frame" style="color: white;"><li style="width: 250px;">Looping</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=7" target="frame" style="color: white;"><li style="width: 250px;">Java OOP</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=8" target="frame" style="color: white;"><li style="width: 250px;">Java RegX</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=9" target="frame" style="color: white;"><li style="width: 250px;">Exception Handling</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=10" target="frame" style="color: white;"><li style="width: 250px;">Java I/O</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=11" target="frame" style="color: white;"><li style="width: 250px;">Java Networking</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=12" target="frame" style="color: white;"><li style="width: 250px;">Java AWT</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=13" target="frame" style="color: white;"><li style="width: 250px;">Java Swing</li></a></button>
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><a href="/CodeNexus/programming/java/qq/check_quiz_value.php?qid=14" target="frame" style="color: white;"><li style="width: 250px;">Java JDBC</li></a></button>
			
		</ul>
</div>
<div>
<iframe src="instruction.html" class="frame" id="frame" name="frame" height="100px" width="200px">

</iframe>
	</div>

	

 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>