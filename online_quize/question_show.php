
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start();


$samp1=$_GET['samp'];
$username=$_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

  if($samp1 == 'Java'){
  $q3="select quiz_id from login where username ='$username'";
  $value1 = mysqli_query($con,$q3);
  if ($result1 = $con->query($q3)) {    
      while ($row1 = $result1->fetch_object()) {
         $flag = $row1->quiz_id;
     }
     $result1->close();
  }
if($flag >= 0)
{
        header("Location: Java1.php?sub=JAVA");     
}
elseif($flag > 20)
        {
        echo '<script>swal("You Have Attempted This Certification Contact Admin For Retest")
        .then((value) => {
          document.location = "http://localhost/CodeNexus/online_quize/quizhome.php";
        });;</script>';
        
        }
else
 {
  echo '<script>swal("Complete All Quiz First")
  .then((value) => {
    document.location = "http://localhost/CodeNexus/online_quize/quizhome.php";
  });;</script>';
 }}



//python
if($samp1 == 'Python'){
$q3="select quiz_id_p from login where username ='$username'";
  $value1 = mysqli_query($con,$q3);
  if ($result1 = $con->query($q3)) {    
      while ($row1 = $result1->fetch_object()) {
         $flag1 = $row1->quiz_id_p;
     }
     $result1->close();
  }

if($flag1 >= 11)
{
        header("Location: Python1.php?sub=Python");     
}
elseif($flag1 > 20)
        {
        
          echo '<script>swal("You Have Attempted This Certification Contact Admin For Retest")
          .then((value) => {
            document.location = "http://localhost/CodeNexus/online_quize/quizhome.php";
          });;</script>';
        }
else
 {
  echo '<script>swal("Complete All Quiz First....!")
  .then((value) => {
    document.location = "http://localhost/CodeNexus/online_quize/quizhome.php";
  });;</script>';
 }}

?>
</body>
</html>