<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Index</title>
  <meta name="description" content="Kubernetes test">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>

	<?php
	if(!isset($_COOKIE["username"])){

	?>
	<div id="topbar">
		<form action="login.php" method="post">
			<label>Username:</label>
			<input type="text" id="username" name="username" required>
			<label>Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login"></button>
			<a href="register.html">
			<button type="button">Register</button>
			</a>
		</form>
	</div>
<?php
}
else{
	echo "<button onclick='logout()'>Logout</body>";
}
?>
<script>
	function logout(){
		document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
		location.reload(true);
	}
</script>
<!--  <script src="js/scripts.js"></script> -->
</body>
</html>