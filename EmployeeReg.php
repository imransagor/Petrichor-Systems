<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Petrichor Systems</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/logo3.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.error {color: #FF0000;}
</style>
 </head>
<body>
 
 
 <div id="wrapper">
	<div class="cont"> 
		<p><i class=" fa fa-phone-square" style="font-size:15px;color:green;"> </i> 01676410301 ; 01679168987<br> <i class="fa fa-envelope" style="font-size:15px"> imransagor22@yahoo.com</i></p>
	</div>
     
	<div style="color:black;margin-left:170px;margin-top:2px">
       
     <h1><b><i>Petrichor Systems</i></b></h1><br>

            </div>
         <div style="width:150px;height:90px;float:left;margin-left:3px;margin-top:-90px;"> 
                <img src="images/logo3.png" width=150; height=90>
            
              </div>
			   <div style="clear:both;" ></div>
	<div class="input">
	<form action="login.php" method="POST">
	 UserName: <input type="text" name="username"  placeholder="Username">
	 Password: <input type="password" name="password"  placeholder="Password">

	<input type="submit" name="submit" value="Login" >
	<input type="submit" name="signup" value="SignUp" >
	</form>
	
	</div>		   

   
	<div id="menu">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
	</div>

<?php
// define variables and set to empty values
$nameErr = $UnameErr =  $passErr = $addErr = $cNoErr= $emailErr = $pnameErr = $salaryErr =  "";
$name = $Uname = $password = $Aname  = $phone = $email = $pname = $salary = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Uname"])) {
    $UnameErr = "UserName is required";
  } else {
    $Uname = input($_POST["Uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Uname)) {
      $UnameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $password = input($_POST["password"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
      $passErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["Aname"])) {
    $addErr = "address is required";
  } else {
    $Aname = input($_POST["Aname"]);
  }
  if (empty($_POST["phone"])) {
    $cNoErr = "address is required";
  } else {
    $phone = input($_POST["phone"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["Pname"])) {
    $pnameErr = "post is required";
  } else {
    $pname = input($_POST["Pname"]);
  }
   if (empty($_POST["salary"])) {
    $salaryErr = "salary is required";
  } else {
    $salary = input($_POST["salary"]);
  }
    

 
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>	

	
	<div class="User_reg">
		<h2>New Employee Registration</h2>
		<p><span class="error">* required field.</span></p>
<form method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name &emsp; &emsp; : <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  UserName  &nbsp :  <input type="text" name="Uname" value="<?php echo $Uname;?>">
  <span class="error">* <?php echo $UnameErr;?></span>
  <br><br>
  Password &nbsp &nbsp : <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  Address &nbsp &emsp;   : <input type="text" name="Aname" value="<?php echo $Aname;?>">
  <span class="error">* <?php echo $addErr;?></span>
  <br><br>
  ContactNo &nbsp  : <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $cNoErr;?></span>
  <br><br>
  E-mail   &nbsp &nbsp &nbsp &nbsp  : <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?> </span>
  <br><br>
  Post  &nbsp &nbsp &emsp; &emsp;  : <input type="text" name="Pname" value="<?php echo $pname;?>">
  <span class="error">* <?php echo $pnameErr;?> </span> <br><br>
  Salary &nbsp &nbsp &nbsp &emsp;   : <input type="text" name="salary" value="<?php echo $salary;?>">
  <span class="error">* <?php echo $salaryErr;?> </span> <br><br>
			
 &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  <input type="submit" name="employeesignup" value="Save" > 
</form>
		
	</div>


	
<div id="footer">
<div style="float:left text-align:center;">
 <p>
                            <strong>Petrichor Systems</strong> <br>
                            <span class="glyphicon glyphicon-map-marker"></span> House 16/C, Road 6, Rampura,Dhaka 1219 <br />Dhaka 1213, Bangladesh<br />
                            <span class="glyphicon glyphicon-phone-alt"></span> 01676410301;01679168987
</div>

		<p style="color:#aa44ff;">(c) All Rights Reserve.Designed by <br><a style="color:red" href="https://www.gmail.com">Md.Imranul Islam</a></p>
		  
	</div>
</div>
<script type="text/JavaScript" src="main.js"></script>
</body>
</html>
