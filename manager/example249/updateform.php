<?php
include('../dbcon.php');
$eid=$_GET['eid'];
$qry="SELECT * FROM `employee` WHERE `eid`='$eid'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
?>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
<h1 align="center" ><B><u>EMPLOYEE INFORMATION PAGE. </u></B></h1>

<form action="updatedata.php" method="post">
<table  border='1' align="center">


<tr>
<td>Employee ID </td>
<td ><input type="text" name="eid" value=<?php echo $data['eid'];?> /></td>
</tr>
<tr>
<td>Firstname</td>
<td ><input type="text" name="fname" value=<?php echo $data['Firstname'];?> /></td>
</tr>

<tr>
<td>Lastname</td>
<td ><input type="text" name="lname"  value=<?php echo $data['Lastname'];?> /></td>
</tr>

<tr>
<td>Gender</td>
<td ><input type="text" name="gen"  value=<?php echo $data['Gender'];?> /> </td>
</tr>

<tr>
<td>Age</td>
<td ><input type="text" name="ag"  value=<?php echo $data['Age'];?> /></td>
</tr>

<tr>
<td>Address</td>
<td ><input type="text" name="addr"  value=<?php echo $data['Address'];?> /></td>
</tr>

<tr>
<td>Working Experience</td>
<td ><input type="text" name="wor"   value=<?php echo $data['Working Experience'];?> /></td>
</tr>

<tr>
	<input type="hidden" name="sid" value="<?php echo $data['eid']; ?>"/>
<td colspan=2 align="center"><input type="submit" name="submit" value="UPDATE" /></td>
</tr>

</table>


