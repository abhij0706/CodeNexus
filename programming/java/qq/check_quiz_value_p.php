
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

$score = print_r($_GET['qid'],true);
$username= $_SESSION['username'];

$q="select quiz_total_p,quiz_id_p from login where username='$username'";
$query=mysqli_query($con,$q);


if ($result1 = $con->query($q)) {    
    while ($row1 = $result1->fetch_object()) {
       $score_11 = $row1->quiz_id_p;
       $score_12 = $row1->quiz_total_p;
   }
   $result1->close();
}

//quiz1
if($score == 0)
{
  	if ($score_11 == 0 && $score_12 >= 0) 
	{

  		header("Location: http://localhost:8080/ThinkTank/programming/java/qq/python_1.php");
  }
        
           
  elseif($score_11 >= 0)
  {
    echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
  }

    else
    {
       echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
    }
}
//quiz2
if($score == 1)
{
  	if ($score_11 == 1 && $score_12 >= 3) 
	{

  		header("Location: http://localhost:8080/ThinkTank/programming/java/qq/python_2.php");
  }
        
           
  elseif($score_11 >= 2)
  {
    echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
  }

    else
    {
       echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
    }
}

if($score == 2)
{
  	if ($score_11 == 2 && $score_12 >= 6) 
  	{
  		header("Location: http://localhost:8080/ThinkTank/programming/java/qq/java_3.php");
  		
  	}
    elseif($score_11 >= 3)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 2)
{
  	if ($score_11 == 2 && $score_12 >= 6) 
  	{
  		header("Location: http://localhost:8080/ThinkTank/programming/java/qq/java_4.php");
  		
  	}
    elseif($score_11 >= 3)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}
  
?>
</body>
</html>