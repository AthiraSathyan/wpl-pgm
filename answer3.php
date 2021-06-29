<html>
    <head>
        <style>
            body{
                
                font-size:15px;
            }
            table{
                font-size:20px;
            }</style>
    </head>
    <body></body>
</html>
    
        
<?php
$cc=mysqli_connect("localhost","root","","restaurant1");
if($cc->connect_error)
    echo "connection failed";
else
{
  if(isset($_POST['s1']))
    {
        $v=($_POST['name']);
        $w=($_POST['type']);
        $x=($_POST['quantity']);
        $y=($_POST['price']);
        $q="INSERT INTO product1 values('$v','$w','$x','$y');";
        if($cc->query($q))
        {
            echo "details saved";
        } 
    }
    if(isset($_POST['s2']))
    {
        $sql="select * from product1";
        $result = $cc->query($sql);
        echo "<center><br><br><br>";
        echo "<table border='1'><caption>BILL OF PURCHASE</caption><tr>
	    <td>Name</td>
	    <td>Type</td>
	    <td>Quantity</td>
        <td>Price</td>
	    </tr>";
        $sum=0;
        while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td> " . $row['name']. "</td><td>" . $row['type']. "</td><td>" . $row['quantity']. "</td><td>" .$row['price']."</td</tr>";
                $sum+=$row['price'];
            }
            echo "<tr><td colspan=3>Total</td><td>".$sum."</td></tr>";

        echo "</table>";
        echo "</center>";
    }
}
$cc->close();
?>