<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="../Resources/wifi.png">
		<link rel="stylesheet" href="../CSS/register.css">
		<title>Welcome to NIC WI-FI - REGISTRATION</title>
	</head>
	<body>
		<div id="register_div">
			<label style="font-size: 36px;"><b>Registration<b></label>
			<img src="../Resources/NIC-logo.png"><hr><br>
			<div id="register_form">
				<form action="#" method="post">
					<label><b>First Name: </b></label>
					<label><b>Last Name: </b></label><br>
					<input type="text" name="fname">
					<input type="text" name="lname"><br><br>
					<label><b>Phone Number: </b></label><br>
					<input type="text" name="phno"><br><br>
					<label><b>Select One: </b></label>
					<select name="user_type">
						<option value="employee">Employee</option>
						<option value="guest">Guest</option>
					</select><br><br>
					<label><b>User Name: </b></label><br>
					<input type="text" name="username"><br><br>
					<label><b>Password: </b></label><br>
					<input type="password" name="password"><br><br>
					<label><b>Re-enter Password: </b></label><br>
					<input type="password" name="repass"><br><br>
					<input id="submit" type="submit" name="Register">
				</form>
			</div>
		</div>
	</body>
</html>