<?php 
	 session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/programming.css">
	<link rel="shortcut icon" type="text/css" href="uploads/logo/CodeNexus-high-resolution-logo-color-on-transparent-background.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">

body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;
}

body{
	
	/*background-image: url('http://i.stack.imgur.com/kx8MT.gif');*/
	color : White;
	background-size: cover;
	height: 100vh;
    padding:0;
    margin:0;
	
	
}
		.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}



.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}



.div1                           /* for title image*/
{
	margin-top: 10%;
   position: relative;
    height: 500px;
    width: 1263px;
    /*background:url(img/prog_prog.jpg);*/
}


	</style>



</head>
<body>


			<!---Navigation Starts	----->

	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">CodeNexus</h1>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="index.php#myservice_section">Our Service</a></li>
					<li> <a href="index.php#myfaq">FAQ</a></li>
					<li> <a href="logout.php">LogOut</a></li>
					<li> <a href="profile.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username']; ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->




 			<!---programming languages Section Start	----->
<br><br><br><br><br>

 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h2 style= "color:white"><b>PROGRAMMING LANGUAGES</b></h2>
 								<div class="sub-heading" style= "color:white">
 									Following are the available programming languages <br>
 									Start learning today
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			   // session_start();

			$con=mysqli_connect('localhost','root');

			mysqli_select_db($con,'projectdatabase');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 25px;">
 								<div class="latest-news-wrap" style="border:3px black solid;">
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content" style="border:3px white solid; color:white; background-color:#AAAAAA;">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br><br>
 										<a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
 									</div>
 								</div>
 							</div>

<?php } ?>
 				</div>
			</div>
 			</section>


 			<!---programming languages Section ends	----->


 			<!---footer Section Start	----->

<br><br><br><br>

<footer class="section footer-classic context-dark bg-image"  id="footer" style="background: #111e2d;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="logo_code.png"><img class="brand-logo-light" src="logo_code.png" alt="" width="120" height="120" srcset="logo_code.png 2x"></a>
			</br>
			</br>
			  <p>CodeNexus is an ultimate programming hub, dedicated to the programmer who want to explore.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2024</span><span> </span><span>CodeNexus</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">codenexusemail@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Phones:</dt>
                <dd><a href="tel:#">+91 7454321421</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ol class="nav-list">
			  <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
            	<li><a href="#">Contacts</a></li>
               
              </ol>
            </div>
          </div>
        </div>
        
      </footer>



 			<!---footer Section Ends	----->

			
</body>
</html>