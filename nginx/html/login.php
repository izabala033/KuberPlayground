<?php

$fail = true;

$username=$_POST["username"];
$sha=sha1($_POST["password"]);

$query = "SELECT password from userdata where username='$username'";
include 'db.php';
$response = pg_fetch_row($response);
if($response){
	if($response[0]==$sha){
		$fail=false;

		setcookie("username",$username);
	}
}


		?>

<html>
<head>
</head>
	<body>
		
		<?php
if($fail){
	echo "Login attempt failed";
}
else{
	echo "Welcome, $username";
}
		?>

		<a href="index.php">
			<button>Back</button>
		</a>
	</body>
</html>