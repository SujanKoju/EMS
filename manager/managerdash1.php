<?php
  include('header.php');
 session_start();
if (isset($_SESSION["name"])) {
}else{
	
	echo "<h1 align='center'> You Are Not Login !!! </h1>";
    header('location:../index.php');
}
?>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" /> 
<h2><a href="../employee/logout.php" style="float:right; margin-right:20px; font-size:20px;">Logout</a></2>
<h1 align="center" >WELCOME TO MANAGER PAGE </h1>
<table border='0'  width= 50% height = 30% align="center">
<tr>
<td>1.</td><td><a href="attendenceinfo.php" style= "font-size:25px; " >Attendance Info</a></td>
</tr>

<tr>
<td>2.</td><td><a href="leaveresponse.php"  style= "font-size:25px; ">Manage Leave Request</a></td>
</tr>

<tr>
<td>3.</td><td><a href="search.php" style= "font-size:25px; ">Search Employee</a></td>
</tr>

<tr>
<td>4.</td><td><a href="update.php" style= "font-size:25px; ">Update Employee Info</a></td> 
</tr>

<tr>
<td>5.</td><td><a href="givetask.php" style= "font-size:25px; ">Give Task</a></td>
</tr>

<tr>
<td>6.</td><td><a href="performance.php" style= "font-size:25px; ">Performance Calculation</a></td>
</tr>


<tr>
<td>7.</td><td><a href="addemployee.php" style= "font-size:25px; ">Add Employee</a></td>
</tr>
<tr>
<td>8.</td><td><a href="deleteemployee.php" style= "font-size:25px; ">Delete Employee</a></td>
</tr>

</table>


</body>
</html>