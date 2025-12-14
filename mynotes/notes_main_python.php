<?php 
	 session_start();
     $username=$_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>ThinkTank</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="mynotes.css">
    <link rel="shortcut icon" type="text/css" href="../img/logo2.png">
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
	background:#d9eee1;
	
	color : White;
	
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
    background:url(uploadimg/prog_prog.jpg);
}
html
	{
		scroll-behavior: smooth;
	}
.mainnotes{
    margin-top:50px;
}
h1{
    color:black;
    font: FreeMono, monospace;
}

.videoimg
{
    position: absolute;
    height: 250px;
    width: 300px;
    
    margin-left: 25px;
    margin-top: 25px;
    
}
.videolink
{
    position: absolute;
    height: 140px;
    width: 300px;
    margin-left: 25px;
    margin-top: 300px;
    
}
.videoname
{
    position: absolute;
    height: 50px;
    width: 500px;
    
    margin-left: 360px;
    margin-top: 25px;
    
}
.ckeditor
{
    position: absolute;
    height: 380px;
    width: 1200px;
    background-color: #D8D8D8;
    margin-left: 360px;
    margin-top: 100px;
    
}
.mainnotes
{
    width: 100%;
}
textarea {
  resize: none;
}
.videolink a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 6px 100px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-align: left;
}
button{
    margin-left: 1175px;
    background-color: green;
    position: inherit;
    margin-top : 315px;
}
.notepad
{
    overflow-y: scroll;
    height: 380px;
}
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
.notepad::-webkit-scrollbar-track {
  box-shadow: inset 0 0 0px grey; 
  border-radius: 10px;
  scrollbar-width:2px;
}

.notepad::-webkit-scrollbar{
  width:0px;
}
 
/* Handle */
.notepad::-webkit-scrollbar-thumb {
  background: #142b3d; 
  border-radius: 0px;
  scrollbar-width:thin;
}
.link{
    text-decoration:none;
    background-color: red;
    color: #fff;
    border-radius: 40px;
    font-weight: bolder;
    box-shadow : 0 10px 40px rgba(255, 122, 0, 0.4);
    margin-bottom: 4px;
}
.popup
{
    height:100px;
    width:100px;
}
iframe
{ 
     overflow-x: hidden;
     align-content: center;

 }
 .printbtn
 {
     
    display: inline-block;
                    outline: none;
                    cursor: pointer;
                    font-size: 16px;
                    line-height: 20px;
                    font-weight: 600;
                    border-radius: 8px;
                    padding: 10px 24px;
                    border: none;
                    box-shadow : 0 10px 40px rgba(255, 122, 0, 0.4);
                    background-color: red;
                    color: #fff;
                    margin-top:-200px;
                    margin-left:1550px;
                
                
 }
</style>



</head>
<body>
<script>
        function printDiv() {
            var divContents = document.getElementById("notepad").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1> <center>Notes</h1></center><br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">ThinkTank</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="/ThinkTank/index.php">Home</a></li>
					<li> <a href="/ThinkTank/index.php#myservice_section">Our Service</a></li>
					<li> <a href="/ThinkTank/index.php#work">Works</a></li>
					<li> <a href="/ThinkTank/index.php#team_Section">Team</a></li>
					<li> <a href="#footer">About</a></li>
					<li> <a href="/ThinkTank/logout.php">LogOut</a></li>
					<li> <a href="/ThinkTank/profile.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username']; ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav> 
    <div class="header" style="margin-top:110px;">
    <h1 style="color:black; "><center>Welcome To Python Notes Section</center></h1>
</div>
    <?php 
              $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
              $username=$_SESSION['username']; 
			$q="select * from videos where course_name='Python' AND username='$username'";
			//echo $course_name;
			$query=mysqli_query($con,$q);
			while ($row=mysqli_fetch_array($query))
		 {
            $videoname = $row['video_name'];
            $videoid = $row['video_id'];
            $videolink = $row['Extra_link'];
            $videolink1 = $row['Extra_link2'];
            $videolink2 = $row['Extra_link3'];
		 	?> 
		 	<div class="mainnotes">


<div class="notesbody" style="background-image:url( img.jpg);margin-top :50px;height: 510px;color:black;margin-left:50px;margin-right:50px;">

    <div class="videoimg">  
     <iframe style="height: 250px; width : 300px; "scrolling="no" frameborder="0" name="<?php echo $videoid  ?>"  src=uploading/<?php echo $row['video_image']; ?> alt="Card image cap"></iframe>
    </div>
    <div class="videolink">

     <h4 style="color: white;">More Content :-</h4>
     <a class="link" target="<?php echo $videoid  ?>"  href=<?php echo $row['Extra_link']; ?> > <?php echo $row['video_name']; ?> 2</a>
     <br/>

     <a class="link"target="<?php echo $videoid  ?>" href=<?php echo $row['Extra_link2']; ?> style="color:balck;"><?php echo $row['video_name']; ?> 3</a>
     <br/>

     <a class="link"target="<?php echo $videoid  ?>" href=<?php echo $row['Extra_link3']; ?>><?php echo $row['video_name']; ?> 4</a>

    </div>

    <div class="videoname">

    <h1 style="color: White;margin-top: -2px;text-transform: uppercase; "><u><?php echo $row['video_name']; ?> :-<u></h1>
    
    </div>
    <div class="ckeditor">
    <form method="post">
     <div class="notepad" id="notepad">
     	
         <?php
         $sql1="select Notes from videos where video_id='$videoid' AND username='$username'"; 
         $result=mysqli_query($con,$sql1);
         while ($res=mysqli_fetch_array($result))
          {
               echo html_entity_decode($res['Notes']);
               
          }
         ?>         

</div>

        </from>
        
   </div>
   
        </div>
        <input class="printbtn" type="button" value="Print" onclick="printDiv()">  
        </div>


			
			<?php } ?> 
             
</body>
</html>