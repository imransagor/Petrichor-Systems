<?php

include('conndb.php');
		if(isset($_POST['update'])){
		
		$updateQuery= "UPDATE userlist SET U_name='$_POST[u_name]' , U_id='$_POST[u_id]' , U_password='$_POST[u_password]', U_address='$_POST[u_address]', U_contactNo='$_POST[u_contactNo]', U_email='$_POST[u_email]' WHERE U_id='$_POST[hidden]'";
		mysqli_query($conn,$updateQuery);
		
	};
			if(isset($_POST['delete'])){
		
		$deleteQuery= "DELETE FROM userlist WHERE U_id='$_POST[hidden]'";
		mysqli_query($conn,$deleteQuery);
		
	};
		if(isset($_POST['submit'])){

	
		$insertQuery= "INSERT INTO userlist (U_name,U_id,U_password,U_address,U_contactNo,U_email) VALUES ('$_POST[name]' ,'$_POST[Uname]' ,'$_POST[password]','$_POST[Aname]','$_POST[phone]','$_POST[email]')";
		mysqli_query($conn,$insertQuery);
		};
			
	echo "<script language='javascript' type='text/javascript'> alert('Done!'); </script>";	
	echo "<script language='javascript' type='text/javascript'> location.href='userinfo.php' </script>";

mysqli_close($conn);
 ?>