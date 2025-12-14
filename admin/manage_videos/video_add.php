  <?php 
 session_start();

   $con=mysqli_connect('localhost','root');

mysqli_select_db($con,'projectdatabase');

// ========================================================================================================================
     // add video course 

if (isset($_POST['btn_add_vid'])) {
	$coursename=$_POST['course_name'];
$courseimg=$_FILES['course_image'];
$coursedesc=$_POST['course_desc'];

$filename=$courseimg['name'];
print_r($courseimg);		
$fileerror=$courseimg['error'];   
$filetmp=$courseimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );

if (in_array($filecheck,$fileextstored)) {
	$destinationfile='../../uploading/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$q="insert into video_info(image,description,course_name) values('$destinationfile','$coursedesc','$coursename')";
	$r=mysqli_query($con,$q);

 if ($r==true)
  {

			 header("location:manage_videos.php?status=added");
    }
	
 }
}



// ==============================================================================
					// update course


if (isset($_POST['btn_update_vid'])) {
	$languagename=$_POST['selected-course-to-update'];
$languageimg=$_FILES['course_image'];
$languagedesc=$_POST['course_desc'];

$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );

if (in_array($filecheck,$fileextstored)) {
	$destinationfile='../../uploading/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$q=" UPDATE video_info SET image='$destinationfile',description='$languagedesc' WHERE course_name='$languagename'";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:manage_videos.php?status=updated");
    }
	
 }
}











// ============================================================================================

				//delete course 

if (isset($_POST['btn-delete-vid'])) {
	
	$course_name=$_POST['selected_course'];
	$q="DELETE FROM video_info WHERE course_name='$course_name'";
	$r=mysqli_query($con,$q);
	if ($r) 
	{
		header("location:manage_videos.php?status=deleted");
	}

}


// =====================================================================================================================

			// delete a particular video from edit_video

if (isset($_GET['id']))        //$_GET because value came from anchor tag and not from 'post' method of a form
{           
	
	$course_name=$_GET['course_name'];     //to give it back to edit_video.php page
	$vid_id=$_GET['id'];
	$vid_name=$_GET['video_name'];

	$q1="select username from login";
	$r1=mysqli_query($con,$q1);
	while ($row = $r1->fetch_assoc())
	{
			
			 foreach($row as $value){
	          $q="DELETE FROM videos WHERE video_name='$vid_name' AND username='$value'";
	          $r=mysqli_query($con,$q);
			}
	}
	if ($r) 
	{
		header("location:edit_videos.php?course_name=$course_name");
	}
	

}

// =======================================================================================================================


 ///add new video in video_edit


if (isset($_POST['btn_add_new_vid'])) 
{ 	echo "Form Submitted!";
	$coursename=$_POST['course_name'];
	$video_img=$_FILES['vid_img'];
	$video_title=$_POST['vid_title'];
	$video_path=$_POST['vid_path'];

	$filename=$video_img['name'];
	print_r($video_img);		
	$fileerror=$video_img['error'];   
	$filetmp=$video_img['tmp_name'];


	$fileext=explode('.', $filename);
	$filecheck=strtolower(end($fileext));

	$fileextstored= array('png','jpg','jpeg' );

	if (in_array($filecheck,$fileextstored)) {
		$destinationfile='../../uploading/'.$filename;
		move_uploaded_file($filetmp,$destinationfile);
        $q1="select username from login";
		$r1=mysqli_query($con,$q1);
		while ($row = $r1->fetch_assoc())
		{
				foreach($row as $value){

				
				$q="insert into videos(video_path,video_name,course_name,video_image,username) values('$video_path','$video_title','$coursename','$destinationfile','$value')";
				$r=mysqli_query($con,$q);
		    
		  }
		}
		
		

	 if ($r==true)
	  {

				 header("location:edit_videos.php?course_name=$coursename&status=added");
	    }
		
	 }
}




// =======================================================================================================================


 ///update  video in video_edit