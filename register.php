<?php 
session_start();
error_reporting(0);
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "admin";
$dbname = "webproj";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');

if(isset($_POST['submit']))
{ 
$name_i = $_POST['name'];
$email_i = $_POST['email'];
$pass_i = $_POST['psw'];
#$dob_i=$_POST['own_campus'];
$ph = $_POST['phno'];
if(($name_i !=''||$email_i !=''||$pass_i!='')&&(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/"))){
//Insert Query of SQL
$query = mysql_query("insert into register(name,email,password,ph) values ('$name_i','$email_i','$pass_i','$ph')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank enter valid phone number....!!</p>";
}
}



mysql_close($connection)
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<form action="post">
</head>
  <div class="container">
  <body>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="ph"><b>Phone number</b></label>
    <input type="phone" placeholder="Enter phonenumber" name="phno" required>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  <input type="submit">
  </div>


  </div>
</form>
</body>
</html>