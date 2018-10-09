<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $UnameErr =  $passErr = $addErr = $cNoErr= $emailErr =  "";
$name = $Uname = $password = $Aname = $phone = $email = "";

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
    $password = input($_POST["name"]);
    // check if name only contains letters and whitespace
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
    
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment =input($_POST["comment"]);
  }

 
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="Uquery.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
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
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
 &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  <input type="submit" id="Usersave" name="submit" value="Save" > 
</form>

<?php

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $Uname;
echo "<br>";
echo $password;
echo "<br>";
echo $Aname;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
?>

</body>
</html>