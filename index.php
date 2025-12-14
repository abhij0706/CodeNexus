<?php


session_start();

if (!isset($_SESSION['username']))
 {
	header('location:login.php');
	# code...
}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>CodeNexus</title>
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
	
	

	  
	<link rel="shortcut icon" type="text/css" href="uploads//logo/CodeNexus-high-resolution-logo-color-on-transparent-background.png">

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

	<!----------email notification-------->

	<style type="text/css">
		body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;
	}
		.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
	}
	
	.servicebody
	{
		

	}
	.welcome{
		margin-top : 50px;
	}

	html
	{
		scroll-behavior: smooth;
	}
	body, html {
    margin: 0;
    padding: 0;
    overflow-x: hidden; /* Prevents unwanted horizontal scrolling */
}
a{
	text-decoration:none;
}
	</style>

	
	

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<h1 style="color:#FBF8EF;margin-top: 10px;" id="myhead">CodeNexus</h1>
			</div>
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"> -->
            <span class="navbar-toggler-icon"></span>
        </button>
			<div class="collapse navbar-collapse" id="navbarNav">
                 <!------Navigation menus starts---->
				 
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li id="logout" style=color:red><a href="logout.php">LogOut</a></li>
					<li> <a href="profile.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a>
				<!---Profile.php--->
				</li>
					

				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-chrome"></i>
							<i class="fa fa-firefox"></i>
							<i class="fa fa-edge"></i>
						</div>
						<br>
						<div class="myDiv">
						<div class="contain">

						<div class="welcome">  
						<marquee>
							<h1 style="color:red;text:bold"><b>WELCOME, </b><span style="color:white"><b><?php echo $_SESSION['username']; ?> 👋 YOU ARE AT RIGHT PLACE</b></span></h1></b>
							
							</marquee>
						</div>
						<br>
							<div class="cta-div">
								<a href="#contact" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
							<div class="social-networks">
								
								<a href="" class="fa fa-twitter" ></a>
								<a href=""  class="fa fa-instagram"></a>
								
								<a href="" class="fa fa-linkedin" ></a>
								
							</div>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

         <!---Login Ends------->

         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					Services provided by us ! <br>Why to wait? Get started today !!
         				</p>
         			</div>
         		</div>
         	</div>

			 <a href="programmingdemo.php">
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>
</a>
         		<a href="video tutorials\java\display_video_courses.php">
				 <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
						 
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>
				</a>

				<a href="mynotes/mynotes.php">
				 <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-question"></i>
         				</div>
         				<h3><a href="mynotes/mynotes.php">MY NOTES</a></h3>
         				<p>
						 Here you will find all notes of particular watched video of programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>			 
         		</div>
</a>
               
<a href="quizehome.php">
         		<div class="col-md-6 col-sm-6 col-xs-12 ">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-book"></i>
         				</div>
         				<h3><a href="quizehome.php">LANGUAGE TOPICS QUIZ</a></h3>   
         				<p>
						 Complete all the topics quiz of particular language to appear for certificafe exam 
         				</p>
         			</div>
         		</div>
</a>

<a href="online_quize/quizhome.php">
				 <div class="col-md-6  col-sm-6 col-xs-12 ">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-pencil"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">CERTIFICATE</a></h3>      
         				<p>
         					Get your certificate of the language which you completed language topics quiz
         				</p>
         			</div>
         		</div>
                </div>


         </div>
     </div>
</a>


<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			<br><br><br>
			<center>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									Most common questions here !<br>Have more doubts? Contact us now !!
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="backfaq">
				<div class="containerfaq">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'projectdatabase');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How can I get certified for a course ?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
											You will get certified for respective completed course <br>
												with marks at the end of final test of the particular course.	
											</p>
										</div>
									</div>
								</div>




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png" height="400px">
							</div>
						</div>

					</div>
				</div>
				</div>
				</div>
				

			</section>

									</center>
			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->

<div class="row text-center" id="contact" >
	<div class="concon">
	<center>
	<h2><b>CONTACT US</b></h2>
	<p>
		Any Issue? Drop us below! We will contact you soon! <br>
			
	</p>
	<iframe  height="800px" width="900px" src="contactusform.php" frameBorder="0" >
      
	</iframe>
	</center>
	</div>
</div>



			<!---Contact us Section Ends------->



  			<!---This is script section------->


	<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	 }






</script>


<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<br>

<footer class="section footer-classic context-dark bg-image"  id="footer" style="background: #111e2d;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="logo_code.png"><img class="brand-logo-light" src="logo_code.png" alt="" width="120" height="120" srcset="logo_code.png 2x"></a>
			</br>
			</br>
			  <p style="color:white">CodeNexus is an ultimate programming hub, dedicated to the programmer who want to explore.</p>
                <!-- Rights-->
                <p style="color:white"class="rights"><span>©  </span><span class="copyright-year">2024</span><span> </span><span>CodeNexus</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4" style="color:white">
              <h5>Contacts</h5>
              
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">codenexusemail@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Phone:</dt>
                <dd><a href="tel:#">+91 7454321421</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5 style="color:white">Links</h5>
              <ul class="nav-list">
			  <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
            	<li><a href="#">Contacts</a></li>
               
              </ul>
            </div>
          </div>
        </div>
        
      </footer>



 			<!---footer Section Ends	----->

			
</body>
</html>