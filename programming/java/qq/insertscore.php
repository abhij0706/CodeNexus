
<?php
session_start();
?>
<?php
$score = print_r($_GET['score'],true);
$score1 = $_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

if($score >=3)
{

$q="select quiz_total from login where username ='$score1'";
$value = mysqli_query($con,$q);
if ($result = $con->query($q)) {    
    while ($row = $result->fetch_object()) {
       $score_1 = $row->quiz_total;
   }
   $result->close();
}


$val= (int)($score_1) + (int)($score);
echo $val;

$q1="update login set quiz_total=$val where username ='$score1'";
$query=mysqli_query($con,$q1);


//access further quize
$q3="select quiz_id from login where username ='$score1'";
$value1 = mysqli_query($con,$q3);
if ($result1 = $con->query($q3)) {    
    while ($row1 = $result1->fetch_object()) {
       $score_11 = $row1->quiz_id;
   }
   $result1->close();
}
$num=1;
$val1= ($score_11) +$num;
echo $val1;
$q2="update login set quiz_id='$val1' where username ='$score1'";
$query=mysqli_query($con,$q2);




echo "inserted";
}

else{
    echo '<script>alert("Less Score")</script>';
}



?>