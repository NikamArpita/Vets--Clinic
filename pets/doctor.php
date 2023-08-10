<?php 
include('conn1.php'); 
$query="select * from appointment"; 
$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Appointments Booked </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2> Appointments Booked</h2></th> 
		</tr> 
			  <th> PET NAME </th> 
			  <th> TYPE </th> 
			  <th> SEX </th> 
			  <th> DATE </th> 
			  <th> SLOT </th> 
			  <th> TIME </th> 
			  <th> REASON</th> 
			  <th> PET PARENT</th
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['petname']; ?></td> 
		<td><?php echo $rows['type']; ?></td> 
		<td><?php echo $rows['sex']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
	    <td><?php echo $rows['slot']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		<td><?php echo $rows['reason']; ?></td> 
		<td><?php echo $rows['fname','lname']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>