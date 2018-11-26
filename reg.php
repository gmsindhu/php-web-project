<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<body>
 

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Courgette+Script" rel="stylesheet">
<style type="text/css">
 
</style>

</head>
<body>



<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 25%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: white;
}
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



background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus,input[type=radio]:focus {
    background-color: #ddd;
    outline: none;
}
.gender{

margin-right: 0;
}

/* Set a style for all buttons */
button {
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 14%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */

body {
    background-image: url("img2.jpg");


 
}
.top-left{
  position: absolute;
    top: 58px;
    left: 16px;
 

}

.box {
    border-radius: 2px;
	border-color:black;
    background-color: transparent;
    padding: 10px;
    margin-right: 21%;
    margin-left: 21%;
    margin-top: 6%;
}
/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<div class="topnav">
  <a  href="nav.html">HOME</a>
  <a class="active" href="reg.php">SIGNUP</a>
  <a href="log.php">LOGIN</a>
  <a href="display.html">BLOGS</a>
  <a href="event.html">EVENTS</a>
  <a href="faq.html">FAQs</a>
</div>
</div>
<div class="box" style="font-family:'Çourgette'";>
 <form method="post" action="reg.php" method="POST" align="center" style="border:3px solid black">
  	<?php include('error.php'); ?>
<div class="top-left" style="font-weight: bold; font-family: georgia;font-size: 24px; margin-left:40%;">REGISTER HERE</div>
    <br>
   <label for="name"><b>Name</b></label>
   <br>
    <input type="text" placeholder="Enter name" name="username" required>

   <br>
   
   <label for="email"><b>Email</b></label>
   <br>
    <input type="text" placeholder="Enter email" name="email" required>
<br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter password" name="password_1" required>
    <br>
     <label for="phone"><b>Confirm password</b></label>
     <br>
    <input type="password" placeholder="Confirm password" name="password_2" required>
   
 

     
      <div class="clearfix">
        <input type="reset" class="cancelbtn"></input>
      <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
	  <p>
  		Already a member? <a href="log.php">Sign in</a>
  	</p>
 
  
  	</p>
  </form>
</body>
</html>