<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
echo "connection unsuccessful";
else{
$d="CREATE DATABASE restaurant1";
if($cc->query($d)==true){
$cc=mysqli_connect("localhost","root","","restaurant1");
}
$s="CREATE TABLE product1(name VARCHAR(25),type VARCHAR(25),quantity VARCHAR(25),price DECIMAL(8,2))";
if($cc->query($s))
    {echo "table created";}
}
$cc->close();

?>