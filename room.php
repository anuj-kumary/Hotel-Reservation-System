<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Book Room</title>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap');
html {
  box-sizing: border-box;
  font-family: 'Crimson Text', serif;
}

*, *:before, *:after {
  box-sizing: inherit;

}

.nav{

    background: white;
    padding: 0 2rem;
    height: 0rem;
    min-height: 10vh;
    overflow: hidden;
    transition: height 1s ease-in-out;
}

.nav .nav-menu{    
    justify-content: space-between;
}

.flex-row{
    display: flex;
    flex-direction: row;    
    flex-wrap: wrap;
}

ul{
    list-style-type: none;
}

a{
    font-family: 'Crimson Text', serif;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    color: var(--text-gray);
}



.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color:black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: crimson;
  color: black;
}
h1 a{

    font-family: 'Crimson Text', serif;
    font-size: 30px;
    color: crimson;
}

.rating{
  color: #FDCC0D;
}

#footer .footer {
  min-height: 10px;
  flex-direction: column;
  padding-top: 30px;
  padding-bottom: 10px;
}


#footer p {
  color: crimson;
  text-align: center;
  font-size: 1.3rem;
  margin-bottom: 5px;
}

</style>
</head>
<body>

   <?php include 'admin/connection.php';?> 


  <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <h1><a href="#home" class="text-gray">Tatva</a></h1>

               
            </div>
            
               
            </div>
            
           
        </div>
    </nav>

 



<!-- Categories list -->
<?php

 $sql = "SELECT * FROM `categories`";
 $result = mysqli_query($conn , $sql);
 while ($row = mysqli_fetch_assoc($result)) {
  // echo $row['room _id'];
   $cat_no = $row['room _id'];
   $cat =  $row['category_name'];
   $cat_desc =  $row['category_description'];
   $cat_guest =  $row['guest'];
   $cat_price =  $row['prize'];



 echo '


<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://source.unsplash.com/1600x900/?hotelroom,'. $cat . ' " alt="Jane" style="width:100%">
      <div class="container">
      <p>Room No :- ' . $cat_no .' </p>
        <h2>' . $cat . '</h2>
         <p>' . $cat_desc . '</p>
         <p>&#128106 ' . $cat_guest .'</p>
        <div class="rating">
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
      </div>

        <p class="title"><b>&#8360 ' . $cat_price . '*</b></p>
        <p><button class="button"><a href="payment.php">Book Now</a></button></p>
      </div>
    </div>
  </div> ';





 };

?>



<section id="footer">
    <div class="footer container">
      <p>Copyright © 2020 Tatva. All rights reserved</p>
</div>
</div>
  </section>
</body>
</html>