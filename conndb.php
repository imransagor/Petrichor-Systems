<?php 
$conn = mysqli_connect("localhost", "root", "", "ps");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>