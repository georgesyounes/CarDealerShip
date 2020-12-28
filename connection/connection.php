<?php 
$servername = "localhost"; 
$username = "root"; 
$password = null; 
$dbname = "blog_samples"; 
  
// checking connection 
$connection = new mysqli($servername, $username, $password, $dbname); 
  
// Check connection 
if ($connection->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
//Close the connection 
//$connection->close(); 

?>