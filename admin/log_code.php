<!--
Here,php code for admin login.
-->
<?php

require_once('connection.php');
if(isset($_POST['username'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){

    	header("Location: home.php");
    	exit();

    }
    else{
    	echo "You have Entered Incorrect Password ";
    }

}



?>