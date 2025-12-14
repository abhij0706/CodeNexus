<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');
$id=$_GET["id"];
$q1="select username from login where id=$id";
$result=mysqli_query($con,$q1);

mysqli_query($con,"delete from login where id=$id");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $usertobedeleted = $row["username"];
        
    }
}
mysqli_query($con,"delete from videos where username='$usertobedeleted'");
?>

<script type="text/javascript">
    window.location="admin_main.php";
</script>