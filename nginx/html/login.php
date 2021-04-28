
<html>
<head>
</head>
	<body>
		<?php

$fail = true;

$username=$_POST["username"];
$sha=sha1($_POST["password"]);

$query = "SELECT password from userdata where username='$username'";
include 'db.php';
$response = pg_fetch_row($response);
if($response){
	if($response[0]==$sha){
		echo "Welcome, $username";
		$fail=false;
	}
}

if($fail){
	echo "Login attempt failed";
}



		?>
	</body>
</html>