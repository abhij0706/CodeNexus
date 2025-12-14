<?php

if(session_id() == '') {
  session_start();
}

?>


<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #111e2d;
  height: 90px;
  transition: all 0.5s ease-in-out; 
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 16px 18px;
  text-transform: uppercase;
  text-decoration: none;
  font-size: 17px;
  margin-right: 28px;
  margin-top:12px;
	font-weight: bold;
  transition: all 0.5s ease-in;
}


.topnav h1 {
  float: left;
  color: white;
  text-align: center;
  padding: 16px 18px;
  text-decoration: none;
  font-size: 35px;
  margin-top:3px;
	font-weight: bold;
  margin-left: 100px;
}

.topnav a:hover {
  color: deepskyblue !important;
  text-decoration:none;
  transition: all 0.5s ease-in-out; 
}

.topnav a.active {
  background: deepskyblue !important;
  color: white;
  border-radius: 50px;
  border: 2px solid black;
  transition: all 0.5s ease-in-out; 
}
.topnav .heading
{
  float: left;
  margin-left:50px;
  font-size: 25px;
  color : white;
  
}
#myhead
{
	font-family: 'Lobster', cursive;
}
</style>
</head>
<body>

<div class="topnav">
<h1 style="color: white;margin-top: 10px;font-family: 'Lobster', cursive;" id="myhead">CodeNexus</h1>
<a href="http://localhost/CodeNexus/profile.php"class="active" ><?php echo $_SESSION['username'];   ?></a>
<a href="http://localhost/CodeNexus/logout.php">LogOut </a> 
 <a href="http://localhost/CodeNexus/index.php#myfaq">FAQs</a>
<a href="http://localhost/CodeNexus/index.php#myservice_section">Our Service </a>
<a class="" href="http://localhost/CodeNexus/index.php">Home</a>
  
</div>
</body>
</html>
