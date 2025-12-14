<?php
session_start();

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'projectdatabase');
		$id=$_POST['txt1'];
		$q="select * from courses where id=$id";
		$result=mysqli_query($con,$q);
		$res=mysqli_fetch_array($result); 
		$_SESSION['topic_id'] = $res['id'];
		
	?>
      <div class="card col-md-6">
           <?php $_SESSION['xyz']=$res['description'];
            header("location:java_programming.php?course_name=".$res['course_name']); ?>
      </div>
	<?php ?>