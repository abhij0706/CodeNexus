<?php

session_start();
// Retrieve the image data from the AJAX request
$imageData = $_POST['data'];

// Remove the data:image/png;base64 prefix from the data
$imageData = str_replace('data:image/png;base64,', '', $imageData);

// Decode the base64 encoded data
$imageData = base64_decode($imageData);

// Generate a unique filename for the image
$filename = uniqid() . '.png';

// Save the image data to a file
file_put_contents('screenshots/' . $filename, $imageData);

// Insert the file path into a MySQL database
$con=mysqli_connect('localhost','root');
              mysqli_select_db($con,'projectdatabase');
            $username=$_SESSION['username'];
            


if (!$con) {
  die('Connection failed: ' . mysqli_connect_error());
}

$filePath = 'screenshots/' . $filename;

$sql = "update login set certificate='$filePath'  where username='$username'";
if (mysqli_query($con, $sql)) {
  echo 'Screenshot saved to database successfully';
} else {
  echo 'Error saving screenshot to database: ' . mysqli_error($con);
}

mysqli_close($con);
?>
