        
<html>
<head>
<h1 align="center">LEAVE RESPONSE </h1>
</head>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
<body>
<table style= "width:50%" align="center" border="1">
<thead>
<tr>
<th>Empolyee Name</th>
<th>Gender</th>
<th>Age</th>
<th>Address</th>
<th>Email id</th>
<th>Working Experience</th>
<th>Leave Type</th>
<th>Duration </th>
<th>Leave From</th>
<th>To</th>
<th>Reason</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
include('../dbcon.php');
//$sql = "SELECT citys.*, comments.* FROM citys, comments WHERE citys.id=$id AND comments.city=citys.city";
$query="SELECT  leave_details.*,employee.* FROM leave_details, employee where employee.eid = leave_details.eid";
$run=mysqli_query($con,$query);

while($test =mysqli_fetch_assoc($run))
	{
		
		echo "<tr>";
		echo"<td>".$test['Firstname']."</td>";
		echo"<td>".$test['Gender']."</td>";
		echo"<td>".$test['Age']."</td>";
		echo"<td>".$test['Address']."</td>";
		echo"<td>".$test['Email id']."</td>";
		echo"<td>".$test['Working Experience']."</td>";
		echo"<td>".$test['Leave_type']."</td>";
		echo"<td>".$test['Number_of_days']."</td>";
		echo"<td>".$test['From_date']."</td>";
		echo"<td>".$test['to_date']."</td>";
		echo"<td>".$test['Reason']."</td>";
		
		if($test['Status']!="")
			{
				echo"<td>".$test['Status']."</td>";
			}
			else
				{
					echo"<td><a href='approve.php'>Approve/Decline</a></td>";
						
				}
				
				echo "</tr>";
				
	}
	mysqli_close($con);	
	?>
		</tbody>
		</table>
		
</body>
</html>
		