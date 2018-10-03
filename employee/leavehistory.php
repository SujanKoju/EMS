
<?php 
session_start();
$empid=$_SESSION['eid'];

?>

<html>
<head>
<h1 align="center">YOUR LEAVE HISTORY </h1>
</head>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
<body>
<table style= "width:50%" align="center" border="1">
<thead>
<tr>
<th>Leave id</th>
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


$query="SELECT * FROM leave_details WHERE eid='$empid'";
$run=mysqli_query($con,$query);

while($test =mysqli_fetch_assoc($run))
	{
		
		echo "<tr>";
		echo"<td>".$test['Leave_id']."</td>";
		echo"<td>".$test['Leave_type']."</td>";
		echo"<td>".$test['Number_of_days']."</td>";
		echo"<td>".$test['From_date']."</td>";
		echo"<td>".$test['to_date']."</td>";
		echo"<td>".$test['Reason']."</td>";
		echo"<td>".$test['Status']."</td>";
		
	}
	?>
</tbody>
		</table>
		
</body>
</html>