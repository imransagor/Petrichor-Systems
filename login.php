<?php
   
    if (isset($_POST['submit']))
        {     
	$conn = mysql_connect('localhost', 'root', '','ps');
	mysql_select_db("ps", $conn);
    session_start();
	$username=$_POST['username'];
    $password=$_POST['password'];
	
    $_SESSION['login_user']=$username; 
    $query = mysql_query("SELECT username FROM login WHERE username='$username' and password='$password'");
    $userquery = mysql_query("SELECT U_id FROM userlist WHERE U_id='$username' and U_password='$password'");
	$employeequery = mysql_query("SELECT E_id FROM employeelist WHERE E_id='$username' and E_password='$password'");

	if (mysql_num_rows($query) > 0)
    {	
		echo "<script language='javascript' type='text/javascript'> location.href='admin.php' </script>";   
      }
     
	elseif(mysql_num_rows($userquery) > 0)
    {	
		$user=$_SESSION['login_user'];
		echo "<script language='javascript' type='text/javascript'> alert('Welcome '+'$user'); </script>";   

		echo "<script language='javascript' type='text/javascript'> location.href='userinfo.php' </script>";   
      }
	elseif(mysql_num_rows($employeequery) > 0)
    {
		$employee=$_SESSION['login_user'];
		echo "<script language='javascript' type='text/javascript'> alert('Welcome '+'$employee'); </script>";   

		echo "<script language='javascript' type='text/javascript'> location.href='employeeinfo.php' </script>";   
      }
    else
      {
		echo "<script type='text/javascript'>location.href='home.html';
			alert('User Name Or Password Invalid!')</script>";
    }
	
    }
	 if (isset($_POST['signup']))
        {
			echo "<script language='javascript' type='text/javascript'> location.href='userReg.php' </script>";   
			
		}
	  if (isset($_POST['usersignup']))
        {
			echo "<script language='javascript' type='text/javascript'> location.href='Uquery.php' </script>";   
			
		}
		if (isset($_POST['employeesignup']))
        {
			echo "<script language='javascript' type='text/javascript'> location.href='Equery.php' </script>";   
			
		}
    ?>