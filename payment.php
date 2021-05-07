<?php




$insert = false;
if (isset($_POST['firstname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }

     $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $cardname = $_POST['cardname'];
     $cardnumber = $_POST['cardnumber'];
      $expmonth = $_POST['expmonth'];
       $expyear = $_POST['expyear'];
        $cvv = $_POST['cvv'];

      $sql ="INSERT INTO `Registrationdb`.`user_details` (`firstname`, `lastname`, `age`, `cin`, `cout`, `gender`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `date`) VALUES ('$firstname', '$lastname', '$age', '$cin', '$cout', '$gender', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv', current_timestamp());";

   if($con->query($sql) == true){
  //echo "Succeefully inserted";
    $insert = true;

   }
     else{
    echo "Error:$sql <br> $con->error";
  }




    $con->close();
}

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<title>Booking Details</title>

<style>
	h2{
		font-family: "Sofia";
        font-size: 30px;
		background-color:black;
		color:rgb(255, 234, 58);;
		width: 100%;
        padding: 0px;
        margin: 0%;
		cursor: pointer;
		border: 1px solid black;

	}
 
	
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}



.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 40%; /* IE10 */
  flex: 40%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<?php
        if($insert == true){

        echo "<center><h3 class='submitmsg'>Thank You!.</center></h3>";
        echo "<center><b>Please check your email for further instructions .</b></center>";
        echo "<center>Having trouble? <a href='contact.php'>Contact us</a>";
        echo "<p class='lead' >
             <a class='btn btn-primary btn-sm' href='welcome.php'  role='button'>Continue to homepage</a></p>";
           
    
        
    }
        ?>
   
       
	<h2>Tatva</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment.php" method="post">


  
      
      
    <h1>Register</h1>
    <p>Please fill this form to book room.</p>
    <hr>

    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter first name" name="firstname" id="firstname" required>

     <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Lirst name" name="lastname" id="lastname" required>

    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age" required>

     <label for="Date"><b>Check In Date</b></label>
    <input type="Date" placeholder="Enter Check In Date" name="cin" id="cin" required><br><br>

     <label for="date"><b>Check Out Date</b></label>
    <input type="Date" placeholder="Enter Check Out Date " name="cout" id="cout" required><br><br>


    <label for="gender">Gender</label>
                        <div>
                            <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" 
                                    id="male">Male</label>
                        </div>
                        <div>
                            <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" 
                                    id="female">Female</label>
                        </div>
                        <div>
                            <label for="other" class="radio-inline"><input type="radio" name="gender" value="o" 
                                    id="other">Other</label>
                        </div>

     <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" id="city" required>

    <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state">
                            <option selected>Choose...</option>
                            <option>Goa</option>
                            <option>Gujarat</option>
                            <option>Madhya Pradesh</option>
                            <option>Maharashtra</option>
                            <option>Punjab</option>
                            <option>Uttar Pradesh</option>
                        </select>

     <label for="inputzip"><b>Zip</b></label>
    <input type="text"  name="zip" id="zip" required>
  </div>
  

            

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
			<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
			<div class="form-group">
			<div class="form-group col-md-4">
            <label for="expmonth">Exp Month</label>
			<input type="text" id="expmonth" name="expmonth" placeholder="September">
			</div>
			</div>
			<div class="row">
				<div class="col-50">
				  <label for="expyear">Exp Year</label>
				  <input type="text" id="expyear" name="expyear" placeholder="2018">
				</div>
				<div class="col-50">
				  <label for="cvv">CVV</label>
				  <input type="text" id="cvv" name="cvv" placeholder="352">
				</div>
			  </div>
                
              </div>
            </div>
          </div>
          
        </div>
        
		<input type="submit" value="Pay" class="btn">
		</div>
      </form>

<?php
        if($insert == true){

       echo ' <a href="thank.php">'; 
  

         

    }
        ?>

      
    </div>
  </div>
 
  </div>
</div>

</body>
</html>