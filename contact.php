<?php

$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }

     $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

      $sql ="INSERT INTO `Registrationdb`.`Contact` (`name`, `email`, `subject`, `message`, `date`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";

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
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<script src="https://kit.fontawesome.com/71aaf157b7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="contact.css">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/site.webmanifest">
	<title>Contact Us</title>
</head>

<body>
	<!------ nav section ------>
	<div class="nav-container">
		<div class="row no-gutter">
			<div class="col-12">
				<nav class="container-fluid; navbar navbar-expand-sm navbar-dark">
					<a href="index.html" class="navbar-brand">
				
					</a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse nav-item-list" id="navbarMenu">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="index.php" class="nav-link">HOME</a>
							</li>
							<li class="nav-item">
								<a href="https://www.google.co.in/maps/" class="nav-link">Map</a>
							</li>
							<li class="nav-item">
								<a href="img.html" class="nav-link">GALLERY</a>
							</li>
							<li class="nav-item">
								<a href="contact.php" class="nav-link">CONTACT</a>
							</li>


					</div>
				</nav>
			</div>
		</div>
	</div>

	<!------ Form section ------>

	<div class="contact-container text-center container-fluid">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col-md-6">
				<form class="contact-form" method="POST" action="contact.php">
					<div class="form-group">
						<label for="fullname">Your Name:</label>
						<input type="text" class="form-control" id="fullname" name="name"
							placeholder="eg. john smith" required />
					</div>
					<div class="form-group">
						<label for="emailaddress">Email Address:</label>
						<input type="email" class="form-control" id="emailaddress" placeholder="eg. joe@email.com"
							name="email" required />
					</div>
					<div class="form-group">
						<label for="subject">Subject:</label>
						<input type="text" class="form-control" id="subject" placeholder="eg. Classes query"
							name="subject" required />
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" id="message" rows="5" name="message" required></textarea>
						<button type="submit" value="submit" class="btn form-btn btn-red">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>



<!------ Footer  ------>

<footer class="container-fluid social-container">
		<div class="row">
			<div class="col-lg-4 text-center address">
				<h4 class="footer-heading">ADDRESS:</h4>
				<p>Mumbai</p>
				<p>Maharashtra</p>
                <p><a href="assets/image/map.png"  target="_blank"
                >VIEW MAP</a></p>
			</div>
			<div class="col-lg-4 col-sm-12 text-center">
				<ul class="social">
					<li>
						<a href="https://www.facebook.com" target="_blank"
							aria-label="Social media icon/link - Facebook"><i class="fab fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://www.twitter.com" target="_blank"
							aria-label="Social media icon/link - Twitter"><i class="fab fa-twitter-square"></i></a>
					</li>
					<li>
						<a href="https://www.youtube.com" target="_blank"
							aria-label="Social media icon/link - Youtube"><i class="fab fa-youtube"></i></a>
					</li>
					<li>
						<a href="#" target="_blank"
							aria-label="Social media icon/link - instagram"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 text-center contact">
				<h4 class="footer-heading">CONTACT:</h4>
				<div>
					<p class="footer-paragraph"><a href="tel:+91 7900135968"> Tel: +91 7900135968</a></p>
					<p class="footer-paragraph">
						<a href="mailto:Support@gorillagainz.com">
							Email: tatva@gmail.com</a>
					</p>
				</div>
			</div>
		</div>
	</footer>


	<!----- Modal Section - Check README.md for credit----->

	
</body>


</html>