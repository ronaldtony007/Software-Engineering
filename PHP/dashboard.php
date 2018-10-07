<?php

session_start();

$user = $_SESSION['user'];

if ($user) {
	echo "Welcome to Dashboard, ".$user ;
}
else {
	header('Location: login.html', true, 301);
	exit();
}

?>

<!DOCTYPE html>
<html>
<script language="javascript">
	function myfunction() {
		alert('logged out successfully');
		window.location = "logout.php"
	}
</script>
<body>
	<br><br><button onclick="myfunction()">Logout</button>
</body>
</html>