
<html>
<head>
</head>
<body>

<?php
$dbconn = pg_connect("host=192.168.49.2 port=32528 dbname=postgres user=postgres password=securepassword123")
	or die('could not connect: ' . pg_last_error());

$response = pg_query($dbconn, "SELECT * FROM userdata");

while($row = pg_fetch_row($response)){
	echo "name: $row[0] pass: $row[1] email: $row[2]";
	echo "<br/>";
}

pg_close($dbconn);



return;
$username=$_POST["username"];
$email=$_POST["email"];
$password1=$_POST["password1"];
$password2=$_POST["password2"];
$sha=sha1($_POST["password1"]);
?>

Welcome <?php echo $username; ?><br>
Your email address is: <?php echo $email; ?><br>
password1: <?php echo $password1; ?><br>
password2: <?php echo $password2; ?><br>
sha1: <?php echo $sha; ?>


</body>
</html>
