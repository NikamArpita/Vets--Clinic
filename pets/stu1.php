<?php
$servername = "localhost";
$database = "wp";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn==false) {
die("Connection failed: " . mysqli_connect_error());
}

$sn = $_POST['snum'];
$sql = "select * from form where username='$sn'";  
$result = mysqli_query($conn, $sql); while($row=mysqli_fetch_array($result))  
{ 
echo "<table>" ; 
echo "<tr>" ;
echo "<td>"Password"</td>";      
echo "<td>".$row['password']."</td>";  
echo "</tr>"
echo "<tr>" ;
echo "<td>"Phone"</td>";      
echo "<td>".$row['phone']."</td>";  
echo "</tr>"
echo "<tr>" ;
echo "<td>"Email"</td>";      
echo "<td>".$row['email']."</td>";  
echo "</tr>"
echo "</table>" ; 
}  
?>  