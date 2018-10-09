<?php

include('conndb.php');
		$sql = "SELECT * FROM employeelist";
		$result = $conn->query($sql);
		

		
echo "<table border= 1>
<tr><h2>Employee List</h2></tr>
<tr>
   <th>Name</th>
   <th>UserName</th>
   <th>Password</th>
   <th>Address</th>
   <th>ContactNo</th>
   <th>Email </th>
    <th>Post</th>
   <th>Salary</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
	
	echo "<form method=POST>";
      echo "<tr>";
		 echo "<td>" .$row['E_name'] ." </td>";
		 echo "<td>".$row['E_id'] . " </td>";
		 echo "<td>" .$row['E_password'] ." </td>";
		 echo "<td>" .$row['E_address'] ." </td>";
		 echo "<td>".$row['E_contactNo'] ." </td>";
		 echo "<td>" .$row['E_email'] ." </td>";	
		 echo "<td>".$row['E_post'] ." </td>";		 
		 echo "<td>".$row['E_salary'] ." </td>";	

         echo " </tr>";
}
 
	echo" <form>";
	
	
	echo " </table>";
	
	
mysqli_close($conn);

 ?>