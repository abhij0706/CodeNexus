<?php 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'projectdatabase');

 if (isset($_POST['submit'])) 
 {
    $_SESSION['vid']=$_GET['video_id'];
    $video_id=$_GET['video_id'];

    $q="UPDATE 'courses' SET 'notes' WHERE id='$course_id'";
    $result=mysqli_query($con,$q);

 }
 





 
 ?>


Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Notes='<p>Vishal sfdscxcc</p> ' where='52'' at line 1 in D:\Xammp\htdocs\projectdatabase\video tutorials\java\java_videos.php:238 Stack trace: #0 D:\Xammp\htdocs\projectdatabase\video tutorials\java\java_videos.php(238): mysqli_query(Object(mysqli), 'insert into vid...') #1 {main} thrown in D:\Xammp\htdocs\projectdatabase\video tu