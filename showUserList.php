<?php

include('conndb.php');
		$sql = "SELECT * FROM userlist";
		$result = $conn->query($sql);
		
	
echo "<table border= 1>
<tr><h2>User List</h2></tr>
<tr>
   <th>Name</th>
   <th>UserName</th>
   <th>Password</th>
   <th>Address</th>
   <th>ContactNo</th>
   <th>Email </th>
   
</tr>";

while($row = mysqli_fetch_array($result)) {
	echo "<form  method=POST>";
      echo "<tr>";
		 echo "<td>" .$row['U_name'] ." </td>";
		 echo "<td>" .$row['U_id'] . " </td>";
		 echo "<td>" .$row['U_password'] ." </td>";
		 echo "<td>" .$row['U_address'] ." </td>";
		 echo "<td>" .$row['U_contactNo'] ." </td>";
		 echo "<td>" .$row['U_email'] ." </td>";	
         echo " </tr>";
}
 
	echo" <form>";
	
	
	echo " </table>";
	
	
mysqli_close($conn);
 ?>