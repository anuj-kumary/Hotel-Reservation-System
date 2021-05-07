<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
<link href= 'https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' /> 

  <style>
    body{
       
      
    }
    
    h2{
      text-align: center;
      font-family: "Lucida Console", "Courier New", monospace;
      text-transform: capitalize;
      font-weight: 500;
    }

  </style>
		
</head>
<body>


  <?php include_once('header.php');?>

  <?php include_once('_c_connection.php');?>

  <h2>Enquiry Details</h2>

  <?php

   $sql = "SELECT * FROM `Contact`";
   $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    	$id = $row['id'];
    	$name = $row['name'];
    	$email = $row['email'];
    	$subject = $row['subject'];
    	$message = $row['message'];
    	$date = $row['date'];

   	echo '<div class="container">
       <div class="table-responsive"> 
	<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">'. $id .'</th>
      <td>'. $name .'</td>
      <td>'. $email .'</td>
      <td>'. $subject .'</td>
      <td>'. $message .'</td>
      <td>'. $date .'</td>
    </tr>
  
    
  </tbody>
</table>
</div>
</div>';
   
   }


  ?>

	

	

</body>
</html>