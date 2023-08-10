<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta charset="utf-8">  
<title>User interface for Ajax, PHP, MySQL demo</title>  
<meta name="description" content="HTML code for user interface for Ajax, PHP and MySQL demo.">  
 
<style type="text/css"> 
body {padding-top: 40px; padding-left: 25%} 
li {list-style: none; margin:5px 0 5px 0; color:#FF0000} 
</style> 
</head> 
<body> 
<form class="well-home span6 form-horizontal" name="ajax-demo" id="ajax-demo" action="a1.php" method="post"> 
<div class="control-group"> 
              <label class="control-label" for="Sname">Phone no </label> 
              <div class="controls"> 
                <input type="text" id="sid" name="sid" onKeyUp="sname_ret()"><br> 
                Patient's Name<br> 
 	
 	 </div> 
 </div> 
 <div class="control-group"> 
              <div class="controls"> 
                <button type="submit" class="btn btn-success">Submit</button> 
              </div> 
 </div> 
</form>
</body> 
</html>
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
  
$sn = $_POST['sid'];  
  
$sql = "select * from appointment where phone='$sn'";  
$result = mysqli_query($conn, $sql);


 while($row=mysqli_fetch_array($result))  
{  
//echo "<p>".$row['name']."</p>";
echo "<table style='width: 300px ; border:solid,black'>" ; 
echo "<tr>" ;
echo "<th>1<th>";
echo "<td>".$row['Shrm_Code']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<th>2<th>";
echo "<td>".$row['Bill_Title']."</td>";  
echo "</tr>";
echo "</table>"; 
echo "<tr>" ;
echo "<th>3<th>";
echo "<td>".$row['Address']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>4<th>";
echo "<td>".$row['City']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>5<th>";
echo "<td>".$row['Sta']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>6<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>7<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>8<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>9<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>10<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>11<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
echo "<tr>" ;
echo "<th>12<th>";
echo "<td>".$row['name']."</td>";  
echo "</tr>";
echo "<tr>";
}  
?>   
  
 
 


