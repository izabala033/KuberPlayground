<html>
<body>

<?php
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