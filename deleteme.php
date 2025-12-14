<?php

session_start();

?>

<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

$username=$_SESSION['username'];

mysqli_query($con,"delete from login where username='$username'");
mysqli_query($con,"delete from videos where username='$username'");

include "logout.php";

?>