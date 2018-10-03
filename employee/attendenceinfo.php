<?php
include("../header.php");
?>
<h1 align = "center">View Attendence Info</h1>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
<table align="center">
<form action="attendenceinfo.php" method="post">
<tr>
	<th> Employee Name </th>
	<td><input type="text" placeholder="Enter Employee Name" name="ename"></td>
    <th>Employee ID </th>
	<td><input type="text" placeholder="Enter Employee ID" name="eid"></td>
    <td colspan="2"><input type="submit" name="submit" label="View"> 
</tr>

<table align="center" width="80%" border="3" style="margin-top:10px;">
	<tr style=background-color:#000;color:#fff;>
		<th>EID</th>
		<th>Name</th>
		<th>Login Time</th>
		
	</tr>
<?php
 if (isset($_POST['submit'])) {
 	$name=$_POST['ename'];
 	$id=$_POST['eid'];
 	include ('../dbcon.php');
 	$qry="SELECT * FROM `attendence` WHERE `ename` like '%$name%' AND `eid`= '$id' ";
 	$run=mysqli_query($con,$qry);
    
    if (mysqli_num_rows($run)<1) {
           echo "No Employee Found.";
     } 
    else{
    	while ($data=mysqli_fetch_assoc($run)) {
    ?>
    <tr align="center">
		<td > <?php echo $data['eid'];?> </td>
		<td> <?php echo $data['ename'];?> </td>
		<td> <?php echo $data['loginTime']?> </td>
	</tr>
<?php
     	}
    }
 }
 date_default_timezone_set('China/Beijing');
 $timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;
$date = date("h:i:sa");
echo $date;
?>

 





<?php
include("../footer.php");
?>