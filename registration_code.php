<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $email = $password = $pwd = '';

$fname = $_POST['fname'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (fname,email,password) VALUES ('$fname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: Login.php");
}
else
{
	echo "Error :".$sql;
}
?>