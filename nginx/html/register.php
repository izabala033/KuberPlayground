
<html>
<head>
</head>
<body>

<?php


$username=$_POST["username"];
$email=$_POST["email"];
$password1=$_POST["password1"];
$password2=$_POST["password2"];
$sha=sha1($_POST["password1"]);


$query = "SELECT * FROM userdata WHERE username='$username' or email='$email'";
include 'db.php';
$response = pg_fetch_row($response);
if($response){
	if($response[0]==$username){
		echo "Error, username already taken";
	}
	else{
		echo "Error, email already taken";
	}
	return;
}

$query = "INSERT INTO userdata(username, password, email) values ('$username', '$sha', '$email')";
include 'db.php';
echo "User created succesfully";


?>
<a href=index.html>
<button>
	Back
</button>
</a>


</body>
</html>
