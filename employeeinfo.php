<?php session_start();?>
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


 </head>

<body>
 
 
 <div id="wrapper">
	<div class="cont"> 
		<p><i class=" fa fa-phone-square" style="font-size:15px;color:green;"> </i> 01676410301 ; 01679168987<br> <i class="fa fa-envelope" style="font-size:15px"> imransagor22@yahoo.com</i></p>
	</div>
     
	<div style="color:black;margin-left:170px;margin-top:2px">
       
    <h1> <b><i>Petrichor Systems</i></b></h1><br>

            </div>
         <div style="width:150px;height:90px;float:left;margin-left:3px;margin-top:-90px;"> 
                <img src="images/logo3.png" width=150; height=90>
            
              </div>
			   <div style="clear:both;" ></div>
	
   
	<div id="menu">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
	</div>
	<div id="logo">
		 <img src="images/com.jpg" width="950px" height="200px">
	</div>
<div class="showinfo">
<?php
	
	$employee=$_SESSION['login_user'];

	
		include('conndb.php');
		
		$sql = "SELECT * FROM employeelist WHERE E_id ='$employee'";
		$result = $conn->query($sql);
			
		echo "<table border= 0 align=center>
		<tr><h2>Profile</h2></tr>";
		
		while($row = mysqli_fetch_array($result)) {
			echo "<form action=Equery.php  method=POST>";
			  echo " <tr>";
				echo" <th>"."Name:"." </th>";
				 echo "<td>"."<input type=text name=e_name value= ".$row['E_name'] ." </td>";
			  echo " </tr>"; 
			  
			  echo " <tr>";
			   echo" <th>"."UserName:"." </th>";
				echo "<td>"."<input type=text name=e_id value=" .$row['E_id'] . " </td>";		
			  echo " </tr>";
			  
			  echo " <tr>";
			   echo" <th>"."Password:"." </th>";
				echo "<td>"."<input type=text name=e_password value=" .$row['E_password'] ." </td>";
			  echo " </tr>"; 
			  
			  echo " <tr>";
			   echo" <th>"."Address:"." </th>";
				echo "<td>"."<input type=text name=e_address value=" .$row['E_address'] . " </td>";		
			  echo " </tr>";
			  
			  echo " <tr>";
			   echo" <th>"."ContactNo:"." </th>";
				echo "<td>"."<input type=text name=e_contactNo value=" .$row['E_contactNo'] . " </td>";		
			  echo " </tr>";
			  
			  echo " <tr>";
			   echo" <th>"."Email:"." </th>";
				echo "<td>"."<input type=text name=e_email value=" .$row['E_email'] . " </td>";		
			  echo " </tr>";
			  
			  echo " <tr>";
			   echo" <th>"."Post:"." </th>";
				echo "<td>"."<input type=text name=e_post value=" .$row['E_post'] . " </td>";		
			  echo " </tr>";
			  
			  echo " <tr>";
			   echo" <th>"."Salary:"." </th>";
				echo "<td>"."<input type=text name=e_salary value=" .$row['E_salary'] . " </td>";		
			  echo " </tr>"." <br> ";
			  echo "<input type=hidden name=hidden value=" .$row['E_id'] ." <br>"." <br>";
			echo "<input type=submit name=update value=Update "." <br> ";
			echo "<input type=submit name=delete value=Delete "." <br> ";
			 echo" <form>";
		
		}
		
			echo " </table>";
			
 ?>
		
	</div>
	
<a href="logout.php"><input style="float:right" type="button" value="Logout"></a><br><br>
	<div style="clear:both;" ></div>
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
</body>
</html>
