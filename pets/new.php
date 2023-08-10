<?php
$servername = "localhost";
$database = "Veterinary";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$un=$_SESSION['sna'];
echo " HEY ". $un;
echo " ,your pet's appointment is booked "

$sql = "SELECT * FROM appointment where fname='$un'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "PETNAME" . $row["petname"];
    echo"  SEX " . $row["sex"];
    echo "  TYPE" . $row["type"];
    echo "DATE" . $row["date"];
    echo"  SLOT " . $row["slot"];
    echo "  TIME" . $row["time"];
    echo "REASON" . $row["reason"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>

