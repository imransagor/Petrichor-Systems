<?php

		include('conndb.php');
		
		if(isset($_POST['update'])){
		
		$updateQuery= "UPDATE employeelist SET E_name='$_POST[e_name]' , E_id='$_POST[e_id]' , E_password='$_POST[e_password]', E_address='$_POST[e_address]', E_contactNo='$_POST[e_contactNo]', E_email='$_POST[e_email]', E_post='$_POST[e_post]', E_salary='$_POST[e_salary]' WHERE E_id='$_POST[hidden]'";
		mysqli_query($conn,$updateQuery);
		
	};
			if(isset($_POST['delete'])){
		
		$deleteQuery= "DELETE FROM employeelist WHERE E_id='$_POST[hidden]'";
		mysqli_query($conn,$deleteQuery);
		
	};
		if(isset($_POST['submit'])){

	
		$insertQuery= "INSERT INTO employeelist (E_name,E_id,E_password,E_address,E_contactNo,E_email,E_post,E_salary) VALUES ('$_POST[name]' ,'$_POST[Uname]' ,'$_POST[password]','$_POST[Aname]','$_POST[phone]','$_POST[email]','$_POST[Pname]','$_POST[salary]')";
		mysqli_query($conn,$insertQuery);
		};


	echo "<script language='javascript' type='text/javascript'> alert('Done!'); </script>";	
	echo "<script language='javascript' type='text/javascript'> location.href='admin.php' </script>";
mysqli_close($conn);




?>