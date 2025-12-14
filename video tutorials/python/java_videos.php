<?php 
	session_start();
	 include 'conn.inc.php';
 require 'comments.inc.php';


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');	
}
 date_default_timezone_set('Asia/Kolkata');
 // echo date_default_timezone_get();




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	
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
  margin-left: 820px;
  border : 4px solid black;
  height: 700px;
  width: 696px;
  margin-top: 45px;
  position: absolute;

}

textarea{
	height: 400px;
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


	
			<!---Navigation Start	----->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">E-Learnning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


	<!---Navigation Ends	----->

	 <!--- notepad ----->
	 <form method="post">
	 <div class="notepad">
	      <textarea name="notes" rows=500;>
			  <?php

				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'projectdatabase');

			  $_SESSION['vid']=$_GET['video_id'];
		      $video_id=$_GET['video_id'];

			  $tablename=$_SESSION['username'];

			  $sql1="select Notes from myvideonotes_{$tablename} where video_id='$video_id'"; 
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

			$tablename = $_SESSION['username'];  

            if(isset ($_REQUEST["submit"]))
			{
			   $var=$_REQUEST['notes'];
			   $_SESSION['vid']=$_GET['video_id'];
			   $video_id=$_GET['video_id'];
               
			   $sql2="update myvideonotes_{$tablename} set Notes='$var' where video_id='$video_id' ";
			   mysqli_query($con,$sql2);
			 
			}

		?>
       			
		<input type="submit" name="submit" value="Save Notes" style="position:absolute;margin-left:1445px;margin-top:715px;padding: 1px 6px;">																  
	
</form>

     










		<!---Video iframe Start	----->

<br>
<div class="container-fluid">
	<div class="row">
 <section class="col-md-7 mt-4">
		
		
		<iframe style="border:1px #999 solid; margin-left: 15px;" width="760" height="450" 
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

		<!--- nxt buttton--->
		<div class="next-video" style="">
 										
                <a href="java_videos.php">Next Tutorial...</a>
										 
 		</div>
		 <!--- nxt buttton--->

		
<br><br>

		


		<!---Video list Start	----->

<div>
	<div class="col-md-8 float-left ml- -1 bg-#F5FFFA mt-4" style="" id="courlis">
   
  <table class="table table-hover mt-3  bg- #F5FFFA">
    <tbody style="">
	<div class="card-header text-center bg-#F5FFFA"><h5>Popular videos</h5></div>


    	<?php 

	$course_name=$_GET['course_name'];

	$sql="select * from videos where course_name='$course_name' LIMIT 4";
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
  </div>

 </div>
 	<!---Video list Ends	----->





 	<!---footer Section Start	----->

<?php 
	include "../../admin/includes/footer.php";
 ?>



 			<!---footer Section Ends	----->
			 
 </body>
 </html>