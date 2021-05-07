
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <style>
    body {
  font-family: sans-serif;  
  background-image: url(bg.jpg);
  background-repeat: no-repeat;
  overflow: hidden;
  background-size: cover;
}

.conta {
  width: 380px;
  height: 68vh;
  margin:7% auto;
  border-radius: 25px;
  background-color: rgba(0,0,0,0.1);
  box-shadow: 0 0 17px #333;
}

.header {
  text-align: center;
  padding-top: 75px;
}

.header h1 {
  color: #333;
  font-size: 45px;
  margin-bottom: 80px;
}

.main {
  text-align: center;
}

.main input, button {
  width: 300px;
  height: 40px;
  border:none;
  outline: none;
  padding-left: 40px;
  box-sizing: border-box;
  font-size: 15px;
  color: #333;
  margin-bottom: 40px;
}

.main button {
  padding-left: 0;
  background-color: #83acf1;
  letter-spacing: 1px;
  font-weight: bold;
 
}
.main p{
  margin-top: -3rem;
  font-weight: 600;
}

.main button:hover {
  box-shadow: 2px 2px 5px #555;
  background-color: #7799d4;
}
.main input:hover {
  box-shadow: 2px 2px 5px #555;
  background-color: #ddd;
}

.main span {
  position: relative;
}

.main i {
  position: absolute;
  left: 15px;
  color: #333;
  font-size: 16px;
  top: 2px;
}





</style>

</head>
<body>

   <?php

  include_once('header.php');
  ?> 
 
 <div class="conta">
  <div class="header">

  </div>
  <div class="main">
    <form class="form-horizontal" method="POST" action="login_code.php">
  <h1>User Login</h1><br>

   
      <span>
        <i class="fa fa-user"></i>
        <input type="text" placeholder="enter email" name="email">
      </span><br>
      <span>
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="password" name="password">
      </span><br>
        <button>login</button>
        <p>OR</p>
        <button><a href="Registration.php">Sign Up</a></button>



    </form>
  </div>

 </div>
  
</body>
</html>









