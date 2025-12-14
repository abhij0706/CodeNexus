

<style type="text/css">


</style>


<?php 
$GLOBALS['username'] = "admin";
function setComments($con)
{
	
	if (isset($_POST['commentSubmit']))
	 {
		 // $uid=$_POST['uid'];
	 	$video_id=$_POST['vid'];
	 	$uid='admin';
		 $date=$_POST['date'];
		 $message=$_POST['message'];

		 $sql="INSERT INTO `commentsection`(`uid`, `date`, `message`,video_id) VALUES ('$uid','$date','$message','$video_id')";
		 // or $result=$con->query($sql);
		 $r=mysqli_query($con,$sql);
		   // do not resubmit the form 
		
	 }
}	


?>