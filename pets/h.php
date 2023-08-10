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

$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "PETNAME" . $row["petname"]. "  SEX " . $row["sex"]. "  TYPE" . $row["type"]. "<br>"
    "DATE" . $row["date"]. "  SLOT " . $row["slot"]. "  TIME" . $row["time"]. "<br>"
    "REASON" . $row["reason"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>