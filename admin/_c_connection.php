<!--
this connection store the booking details and contact information.
-->
<?php
$conn = mysqli_connect("localhost","root","","Registrationdb");

if(!$conn)
{
	echo "Database connection faild...";
}
?>