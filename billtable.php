<?php

$conn = new mysqli ("localhost","root","","billdb");
if ($conn->connect_error)
 {
die("<br>Connection failed:". $conn->connect_error);
}
$sl = "CREATE TABLE bill(id INT(2) PRIMARY KEY,items VARCHAR(30) NOT NULL,price DECIMAL(5,2))";

if ($conn->query($sl) === TRUE) 
{
echo "<br> Table Student created successfully";
} 
else 
{
echo "<br>Error creating table:" . $conn->error;
}
$conn->close();
?>
