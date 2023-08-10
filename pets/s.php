<?php  
$servername = "localhost";  
$database = "veterinary";  
$username = "root";  
$password = "";  
  
// Create connection  
  
$conn = mysqli_connect($servername, $username, $password, $database);  
  
// Check connection  
  
if ($conn==false) {  
die("Connection failed: " . mysqli_connect_error());  
}  
  
$sn = $_POST['snum'];  
  
$sql = "select * from appointment where phone='$sn'";  
$result = mysqli_query($conn, $sql);


 while($row=mysqli_fetch_array($result))  
{  
//echo "<p>".$row['name']."</p>";
echo "<table border='1'>" ; 
echo "<tr>" ;
echo "<th>petname<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<th>phone<th>";
echo "<td>".$row['phone']."</td>";  
echo "</tr>";
echo "</table>"; 
}  
?>  