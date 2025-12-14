
<?php
session_start();
?>
<?php

$val=1;

$score1 = $_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

$q1="update login set certivaluejava='$val' where username ='$score1'";
$query=mysqli_query($con,$q1);



?>