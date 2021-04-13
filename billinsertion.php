<?php

$conn = new mysqli ("localhost","root","","billdb");
if ($conn->connect_error)
 {
die("<br>Connection failed:". $conn->connect_error);
}
$si = "INSERT INTO bill(id,items,price)
VALUES (1,'Tea',18),(2,'Coffe',19),(3,'Rice',20),(4,'Chappathi',8)";

if($conn->query($si) === TRUE) 
{
echo "New record created successfully";
} 
else 
{
echo "Error". $sql ."<br>" . $conn->error;
}
$conn->close();
?>