<?php

$query = $_GET['findName'];
include('conndb.php');
echo"<div class = 'showsearch'>";
echo "<table border= 1 align=center>";
 

	if(isset($query)){
		
		$sql = "SELECT * FROM employeelist WHERE E_name LIKE '" . $query . "%' OR E_id LIKE '" . $query . "%' OR E_address LIKE '" . $query . "%' OR E_contactNo LIKE '" . $query . "%'  OR E_email LIKE '" . $query . "%'  OR E_post LIKE '" . $query . "%' OR E_salary LIKE '" . $query . "%' ";
			if($result = mysqli_query($conn, $sql)){
       
				if(mysqli_num_rows($result) > 0){


while($row = mysqli_fetch_array($result)) {
	echo"<center><h2>Search Result</h2></center>";
	echo "<form id=formid action=Equery.php method=POST>";
			  
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
			  echo " </tr>";
			   echo" <br>";
			   echo "<input type=hidden name=hidden value=" .$row['E_id'] ." <br>"." <br>";
			  echo "<input type=submit name=update value=Update "." <br> ";
			  echo "<input type=submit name=delete value=Delete "." <br> "." <br>";
			  
			  echo " </form>";
			  
		
	
     echo "</table>";
	
	 echo"</div>";
	 
}
 mysqli_free_result($result);
        } else{
            echo "<p>No matches found for <b>$query</b></p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
	
	
	
mysqli_close($conn);
 ?>