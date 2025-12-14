<?php 


session_start();
include 'conn.inc.php';
include "../../admin/includes/navbar1.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<link rel="shortcut icon" type="text/css" href="logo.png">
		<!-- Latest compiled and minified CSS -->
		<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<style type="text/css">
	body{
		background :#F5FFFA;
		overflow-x:hidden;
	}
	.mycard
	{
		transition: all 0.9s ease;
	}

	.mycard:hover
	{
		transform: scale(1.05);
	}
	body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;
}
#id{
	
    margin-left: 0 !important;
    margin-right: auto;
    width: 100%;
    padding-left: 20px; /* Adjust as needed */
}

.col-md-3 {
    margin-left: 50px; /* Remove this */
	text-align:left;
}

</style>



</head>
<body>

<br><br><br>
	<div class="container-fluid position-relative" id="course">
		<div class="marquee" style="width: 620px; margin-left: 32%;">
<center style="height: 50px; text-transform: uppercase; "><marquee><h1 class="text-black h3" style="color :#000957;font-size:50px;" >Welcome To <?php echo $_GET['course_name']; ?> Video Tutorial</h1></marquee></center><br><br>
</div>
		<div class="row" >
			

<?php 
		
        $username=$_SESSION['username'];
		$course_name=$_GET['course_name'];
			$q="select * from videos where course_name='$course_name' AND username='$username'";
			//echo $course_name;
			$query=mysqli_query($con,$q);
			while ($row=mysqli_fetch_array($query))
		 {

		 	?> 
			
		 	<div class="col-md-3">
				<div class="card shadow mycard" style="width: 18rem; height: 7rem;margin-left:50px;">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 11rem;"   src=../../uploading/thumbnail/<?php echo $row['video_image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body shadow" style="background-color: #f1f1f1;">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				    <p class="card-text"><?php echo $row['video_name']; ?></p> 
				    <a href="java_videos.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>" class="btn btn-primary border-0 ">Watch Video</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>

<!-- footer section starts -->

					<footer>
					<?php 	
					include "../../admin/includes/footer.php";
					?>
					</footer>
		<!-- footer section ends -->

</body>
</html>