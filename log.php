<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Courgette+script" rel="stylesheet">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: 'Courgette';}
form {border: 3px solid #000000;}

input[type=text], input[type=password], input[type=email]  {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {							
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

body {
    background-image: url("img2.jpg");


 
}
</style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}

</style>
</head>
<body>
<div class="topnav">
  <a  href="nav.html">HOME</a>
  <a class="active" href="log.php">LOGIN</a>
  <a href="display.html">BLOGS</a>
  
  <a href="event.html">EVENTS</a>
  <a href="faq.html">FAQs</a>
</div>

<h2 style=" margin-left:45%">Login Form</h2>
<form method="post" action="log.php"style=" margin-left:500px ; margin-right:500px">
  	<?php include('error.php'); ?>

  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter name" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="reg.php">Sign up</a>
  	</p>
  </div>

  
</form>

</body>
</html>
	 
  
