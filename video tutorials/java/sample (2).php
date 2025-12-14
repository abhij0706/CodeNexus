<?php 
	session_start();
 include 'conn.inc.php';
 require 'comments.inc.php';
 include "../../admin/includes/navbar1.php";


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');	
}
 date_default_timezone_set('Asia/Kolkata');
 // echo date_default_timezone_get();




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>CodeNexus</title>
 	<link rel="icon" type="image/x-icon" href="logo1.png?v=1">
 	<link rel="stylesheet" type="text/css" href="../../css/programming.css">

 	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 	<style type="text/css">
 		#mybody
{
	background: #F5FFFA;
	

}
#mybody{
	
	
}
#mybody::-webkit-scrollbar {
	display: none;
  
}
#video-list-section
{
	position: absolute;
	top:80px;
	right: 150px;
	background-color: deepskyblue;
	padding: 20px;
	left:900px;
	width: 400px;

}
.fixed-top
{
	position: relative;
}

input[type=submit]{
	background-color:orange;
	border:solid;
	border-radius:6px;
	hover
}

.item #sidebar-wrapper, #sidebar-wrapper {
    float: right;
    width: 30%;
    max-width: 330px;
}

#sidebar-wrapper {
    padding-top: 20px;
}

.notepad
{
  margin-left: 930px;
  border : 2px solid black;
  height: 600px;
  width: 740px;
  margin-top: 45px;
  position: absolute;

}

textarea{
	height: 300px;
}
.next-video p
{
	margin-bottom: 15px;
	text-align: justify;
	

}

.next-video{
margin-top: 40px;
position: absolute;
}

.next-video a
{
	font-size: 14px;
	background-color: #f89406;
	padding:10px 20px;
	margin-top: 100px ;
	margin-left: 640px;
	
	color: white;
	transition: all 0.5s ease-in;
}


.next-video a:hover
{
	font-size: 14px;
	border:1px solid #34495e;
	border-top-right-radius: 20px;
	background-color: transparent;
	color: black;
	margin-right: 0;
	background-color: greenyellow;
	text-decoration: none;

}
.next-video1{
margin-top: 710px;
position: absolute;
margin-left: 778px;
}

.next-video1 a
{
	font-size: 14px;
	background-color: #f89406;
	padding:10px 20px;
	margin-top: 100px ;
	margin-left: 640px;
	
	color: white;
	transition: all 0.5s ease-in;
}


.next-video1 a:hover
{
	font-size: 14px;
	border:1px solid #34495e;
	border-top-right-radius: 20px;
	background-color: transparent;
	color: black;
	margin-right: 0;
	background-color: greenyellow;
	text-decoration: none;

}
 	</style>
 </head>
 <body id="mybody" class="bg-#F5FFFA">


	<!---Navigation Ends	----->

	 <!--- notepad ----->
	 <form method="post">
	 <div class="notepad">
	      <textarea name="notes" rows=500;>
			  <?php
                 
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'projectdatabase');
				$username=$_SESSION['username'];
			  $_SESSION['vid']=$_GET['video_id'];
		      $video_id=$_GET['video_id'];

			 // $tablename=$_SESSION['username'];

			  $sql1="select Notes from videos where video_id='$video_id' AND username='$username'"; 
              $result=mysqli_query($con,$sql1);
			  while ($res=mysqli_fetch_array($result))
			   {
		        
					echo html_entity_decode($res['Notes'],ENT_QUOTES);
	           }

			  ?>
			  
		</textarea>
     </div>
	 <script src="ckeditor/ckeditor.js"></script>
	 <script>
        CKEDITOR.replace('notes');
	 </script>
    <?php

     $con=mysqli_connect('localhost','root');
     mysqli_select_db($con,'projectdatabase');

			$_SESSION['vid']=$_GET['video_id'];
			$video_id=$_GET['video_id'];

			  
			$username1 = $_SESSION['username'];
            if(isset ($_REQUEST["submit"]))
			{
				
			   $var=$_REQUEST['notes'];
			   $_SESSION['vid']=$_GET['video_id'];
			   $video_id=$_GET['video_id'];
               
			   $sql2="update videos set Notes='$var' where video_id='$video_id' AND username='$username1' ";
			   mysqli_query($con,$sql2);
			 
			}

		?>
       			
		<input type="submit" name="submit" value="Save Notes" style="position:absolute;margin-left:1575px;margin-top:665px;padding: 1px 6px;">																  
	
</form>

     










		<!---Video iframe Start	----->

<br>
<div class="container-fluid">
	<div class="row">
 <section class="col-md-7 mt-4">
		
		
		<iframe style="border:1px #999 solid; margin-left: 15px;" width="870" height="550" 
<?php  
		$_SESSION['vid']=$_GET['video_id'];
		$video_id=$_GET['video_id'];
		$sql="select * from videos where video_id='$video_id'";
		
		$result=mysqli_query($con,$sql);
		
		while ($row=mysqli_fetch_array($result))
		 {
			?>
			src=<?php echo $row['video_path'];   //fetching youtube video path from database & storing into src attribute
		}

		

		?>
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


		<!---Video iframe Ends	----->


		
<br><br>

		


		<!---Video list Start	----->

<div>
	<!-- <div class="col-md-10 float-left ml- -1 bg-#F5FFFA mt-4" style="" id="courlis">
   
  <table class="table table-hover mt-3  bg- #F5FFFA">
    <tbody style="">
	<div class="card-header text-center bg-#F5FFFA"><h5>Popular videos</h5></div>


    	<?php 

	$course_name=$_GET['course_name'];

	$sql="select * from videos where course_name='$course_name' AND username='admin' LIMIT 4";
	$result=mysqli_query($con,$sql);
    
	while (($row=mysqli_fetch_array($result)))
	 {
		
?>
     
      <tr>
	  
        <td><a href=""><img src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?>  ddheight="100" width="150"></a></td>
        <td><b><?php echo $row['video_name']; ?></b></td>    	
      </tr>
	

  <?php } ?>
  
    </tbody>
  </table>
  </div>
  </div>
  </div>-->

 </div> 
 	<!---Video list Ends	----->





 	<!---footer Section Start	----->





 			<!---footer Section Ends	----->
			 
 </body>
 </html>