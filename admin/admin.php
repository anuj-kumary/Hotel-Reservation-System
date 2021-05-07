<!DOCTYPE html>
<html>
<head>
	<title>Booking Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</head>
<body>



  <?php

   include_once('header.php'); 
  ?>


   <?php include_once('_c_connection.php');?>




<?php
    $sql = "SELECT * FROM `user_details`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    	$id = $row['id'];
    	$firstname = $row['firstname'];
    	$lastname = $row['lastname'];
    	$age = $row['age'];
    	$cin = $row['cin'];
    	$cout = $row['cout'];
    	$gender = $row['gender'];
    	$city = $row['city'];
    	$state = $row['state'];
    	$zip = $row['zip'];
   


    	echo '<div class="container">
       <div class="table-responsive"> 
      <table class="table table-striped" id="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Gender</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th colspan="2">Operation</th>
      <th colspan="2">Status</th>

     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">'. $id .'</th>
      <td>'. $firstname .'</td>
      <td>'. $lastname .'</td>
      <td>'. $age .'</td>
      <td>'. $cin .'</td>
      <td>'. $cout .'</td>
      <td>'. $gender .'</td>
      <td>'. $city .'</td>
      <td>'. $state .'</td>
      <td>'. $zip .'</td>
      <td> <a href="delete.php?id= '.$id.' "> <button type="button" class="btn btn-danger">Delete</button> </a><td>
      <td><input type="checkbox" checked data-toggle="toggle" data-width="100" data-on="Check In" data-off="Check Out" data-onstyle="success" data-offstyle="danger"></td>
      <td>
    </tr>
  
  </tbody>
</table>
</div>
</div>';
    	
    }


?>



   




</body>
</html>



