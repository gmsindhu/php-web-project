<?php

//create database connection
$con=mysqli_connect("localhost","root","admin","webproj");
//check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//insert posts into database
$sql="INSERT into payment(name,ccn,month,year,cvv)values('".$_POST['name']."','".$_POST['ccn']."','".$_POST['month']."','".$_POST['year']."','".$_POST['cvv']."')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "Successfully registered for the event";
mysqli_close($con);
?>
&nbsp;&nbsp;<a href="nav.html">Click here to go to home</a>