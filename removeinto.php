<?php
include ('connection.php');
session_start();
$conn = openConnection();
$user = $_SESSION['user'];
$device_name=$_POST['dname'];
$mac_address=$_POST['daddress'];
$os=$_POST['dos'];
$status="pending";

$query= "insert into devices(username,device_name,mac_address,os,status,from_duration,to_duration) values('$user','$device_name','$mac_address','$os','$status',now(),'')";
$status= mysqli_query($conn,$query);
if($status)
{
	closeConnection($conn);
	echo"<Script>alert('sucess');window.location='dashboard.php';</script>";
}
else
{
	echo "Fail: " . mysqli_error($conn);
	closeConnection($conn);
}
?>