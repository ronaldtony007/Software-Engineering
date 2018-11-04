<?php

session_start();

$user = $_SESSION['user'];

if (!$user) {
	header('Location: login.html', true, 301);
	exit();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="icon" href="Resources/wifi.png">
        <link rel="stylesheet" href="CSS/remove_client.css">
        <title>NIC WI-FI - Dashboard</title>
	</head>
	<script language="javascript">
		function myfunction() {
			alert('logged out successfully');
			window.location = "logout.php"
		}
	</script>
	<body>
		<header>
	        <label id="inoc">iNOC</label>
	        <img id="logo2" src="Resources/DigitalIndia-logo.png" alt="DigitalIndia-logo">
	        <img id="logo1" src="Resources/NIC-logo2.png" alt="NIC-logo">
	        <img id="logotext" src="Resources/NIC-txt.png" alt="NIC-logotxt">
	    </header>
	    <hr>
		<div class="side">
			<p><a href="dashboard.php">View Device(s)</a></p>
			<p><a href="add.php">Add Device(s)</a></p>
			<p><a href="modify.php">Modify Device Information</a></p>
			<p id="selected"><a href="remove.php">Remove Device(s)</a></p>
			<p><a href="logout.php" onclick="myfunction()">Logout</a></p>
		</div>
		<div class="main">
		<h1 class="heading">Remove Device</h1><br>
		<table border="1" style="margin:auto;">
		<tr>
		<th>DEVICE NAME</th>
		<th>MAC ADDRESS</th>
		<th>OS</th>
		<th>STATUS</th>
		<th>FROM</th>
		<th>TILL</th>
		<th>PWD</th>
		<th>DELETE</th>
		</tr>
		<?php
		include('connection.php');
		$sel="select * from devices where username='$user'";
		$conn = openConnection();
		$row=mysqli_query($conn,$sel);
		while($each=mysqli_fetch_array($row))
		{
			$rid=$each['sno'];
			$device_name=$each['device_name'];
			$mac_address=$each['mac_address'];
			$os=$each['os'];
			$status=$each['status'];
			$from=$each['from_duration'];
			$till=$each['to_duration'];
			$password=$each['password'];
			
			echo "<tr>
			<td>$device_name</td>
			<td>$mac_address</td>
			<td>$os</td>";
			if ($status === "pending") {
				echo "<td><span style='color:blue'>$status</span></td>";
			}
			if ($status === "approved") {
				echo "<td><span style='color:green'>$status</span></td>";
			} 
			if ($status === "declined") {
				echo "<td><span style='color:red'>$status</span></td>";
			} 
			echo "<td>$from</yd>
			<td>$till</td>
			<td>$password</td>
			<td><a href='removeinto.php?id=$rid'>Delete</a></td>'
			</tr>";
		}
		closeConnection($conn);
		?>
		
		</table>
		<hr>
		</div>
		<hr>
	    <footer>
	        <p>&copy Copyright This site is designed, developed, hosted and maintained by National Informatics Centre,<br>
	        Ministry of Electronics & Information Technology, Government of India.</p>
	    </footer>
	</body>
</html>