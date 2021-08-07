SET UP CONNECTION + BASIC SQL QUERIES WITH PHP
C:XAMPP\htdocs\new folder ( In this case: phprevision)
To run php code: localhost\phprevision\index.php

PHP CODE 


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/

//$sql= "INSERT INTO `trips` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other` ) VALUES (NULL, 'Aman Sharma  ', '28', 'male', 'aman@gmail.com', '123456', 'hiii')";

//$sql=" UPDATE `trips` set name='Avik' where sno=18";

//$sql="DELETE from `trips` where sno=12";

// for all above queries just use mysqli_query($conn,$sql). for select, you need to store results in res variable

$sql= "SELECT * from `trips`"; // special case for select

$res= mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($res))
{
   echo '<pre>';
   print_r($row);
}

?>
