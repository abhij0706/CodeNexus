<?php 

include 'conn.inc.php';
include "../../admin/includes/navbar1.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<link rel="shortcut icon" type="text/css" href="../../img/logo2.png">
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		
		body{
			background:  #333;
			background-image: url('../../IrM.gif');
			background-size: 50% 50%;
			background-position: center;
			
		}
.card-body
{
	 border-style: solid !important;
	  border-width:1px !important;
	  background: #333 ;
	  display:flex;
	  
}

.row
{	
	margin-left: 10px;
}
.container
{
	margin-top: 5%;
	
}

.inner img
{
	transition: all 1.5s ease;  /* to rotate image smoothly*/
	
}
.inner:hover img
{
	transform:rotate(5deg);  
	    /* to rotate the image 5 deg*/
	
}

.div1                           /* for title image*/
/*{
   position: relative;
    height: 500px;
    width: 1320px;
	margin-left: 180px;
	margin-top: 10px;
    background : url("../../img/tutorials.jpg");
	box-shadow: 7px 7px 5px white;
}*/
body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;
}


	</style>
</head>
<body>

	 <!-- title image start -->
	<!--<br> <br><br>
	<div class="container-fluid  div1">
		
	</div>-->
	<!-- title image ends -->


	<!-- video course card starts -->
	 <br><br>
	
	<div class="container-fluid">

		<div class="row">
			

<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {

		 	?> 
		 	<div class="col-md-4">
				<div class="card shadow" style="width: 22rem; height: 15rem; background: #333">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 15rem;"   src=<?php echo $row['image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body text-center shadow" style="border: 3px  solid white ">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				   <!--  <p class="card-text"><?php echo $row['description']; ?></p> -->
				    <a href="display_video_list.php?course_name=<?php echo $row['course_name']; ?>" class="btn btn-primary">Watch Videos</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>

	<!-- video course card ends -->
<!-- 
<?php 

		$sql="select * from video_info";
		$result=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result))
		 {
			?> <button > <a ><?php  echo $row['course_name']; ?></a></button><?php 
		}

		

 ?> -->
<footer style="margin-top: -200px;">
	 <?php 
 include "../../admin/includes/footer.php";
  ?>
</footer>

<!-- footer section ends -->

</body>
</html>
