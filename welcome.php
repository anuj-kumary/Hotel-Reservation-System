<?php
session_start();


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tatva</title>
</head>
<body>
 
  
  <nav class="navbar ">
    <ul class="nav-list">
      <div class="logo"><a href="index.php"><img src="img/logo.jpeg" alt="logo"></a></div>
      <li><a href="welcome.php">Home</a></li>
      <li><a href="img.html">Gallery</a></li>
      <li><a href="contact.php">Contact </a></li>
      <li><a href="#o">Our brand</a></li>
      <li class="item"><a href="logout.php">Log Out</a></li>
      </ul>
      <div class="rightNav">
        <li><a href="#">Welcome - <?php echo $_SESSION['email']?></li>
      </div>


  </nav>
 


  
  <section id="hero">
    <div class="hero container">
      
        <a href="room.php" type="button" class="cta">Book Room</a>
      </div>
    </div>
  </section>

   <section id="Home">
    <h1 class="h-primary">Welcome to Tatva</h1>
        <p><b>Eat Sleep Repeat</b></p><
        

  
  

    <section id="services-container"><b>
        <h1 class="h-primary center">Our Brand</h1>
        <div id="services">
            <div class="box">
                <img src="img/Taj.jpg" alt="">
                <h2 class="h-secondary center">Taj</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam,
                    recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                  .</p>
            </div>
            <div class="box">
                <img src="img/Vivanta.jpg" alt="">
                <h2 class="h-secondary center">Vivanta</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab
                    dignissimos vero? Unde numquam odit repudiandae perferendis nisi.</p>
            </div>
            <div class="box">
                <img src="img/Gateway.jpg" alt="">
                <h2 class="h-secondary center">Gateway</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam
                    minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt qua</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/brand1.jpeg" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo2.png" alt="Our Client">
            </div>
          
            <div class="client-item">
                <img src="img/brand2.jpeg" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/brand3.png" alt="Our Client">
            </div>
        </div>

    </section>
    
    
    

 
  

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>A</span>DT </h1></div>
      
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        
      </div>
      <p>Copyright ?? 2020 Tatva. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  
</body>
</html>