
<!DOCTYPE html>
<html>
<head>
  <title>Admin | Hotel Management</title>
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <style>


    body {
      height: 100vh;
  font-family: sans-serif;  
  background-image: url(img/r4.jpeg);
  background-repeat: no-repeat;
  overflow: hidden;
  background-size: cover;
}

.conta {
  width: 380px;
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
.main h1{
  color: #fff;
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
  margin-bottom: 70px;
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

 
 <div class="conta">
  <div class="header">

  </div>
  <div class="main">
    <form class="form-horizontal" method="POST" action="log_code.php">
  <h1>Admin Login</h1><br>

   
      <span>
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Enter Username" name="username">
      </span><br>
      <span>
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Password" name="password">
      </span><br>
        <button>Login</button>



    </form>
  </div>

 </div>
  
</body>
</html>









