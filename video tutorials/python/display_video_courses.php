<?php 

include 'conn.inc.php';
include "../../admin/includes/navbar.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeNexus</title>
	<style type="text/css">
		
		body{
			background:  #333;
		}
.card-body
{
	 border-style: solid !important;
	  border-width:1px !important;
	  background: #333 ;
	  
}

.row
{
	margin-left: 100px;
}
.container
{
	margin-top: 1%;
	
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
    width: 1300px;
	margin-left: 122px;
	margin-top: 10px;
    background : url("../../img/Blue Modern Branding Tutorial Course Facebook Post.png");
	box-shadow: 7px 7px 5px white;
}*/


	</style>
</head>
<body>

	 <!-- title image start -->
	<br> <br><br>
	
	<!-- title image ends -->


	<!-- video course card starts -->
	<br><br><br>
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


<!-- footer section starts -->

<footer style="margin-top: -10px;">
	 <?php 
 include "../../admin/includes/footer.php";
  ?>
</footer>

<!-- footer section ends -->

</body>
</html>
