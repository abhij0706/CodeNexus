<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'projectdatabase');

$q1="select username from login";
		$r1=mysqli_query($con,$q1);
		while ($row = $r1->fetch_assoc())
		{
			foreach($row as $value) echo "<td>$value</td>";
		}


?>