<?php
  include('header.php');
?>

 
<h1 align="center" ><B><u>EMPLOYEE DELETE PAGE. </u></B></h1>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />

<form action="deleteemployee.php" method="post">
<tr ;>
	<th> Employee Name </th>
	<td><input type="text" placeholder="Enter Employee Name" name="ename"></td>
    <th>Employee Adress </th>
	<td><input type="text" placeholder="Enter Employee Adress" name="eaddress"></td>
    <td colspan="2"><input type="submit" name="submit" label="Search"> 
</tr>

<table align="center" width="80%" border="3" style="margin-top:10px;">
	<tr style=background-color:#000;color:#fff;>
		<th>EID</th>
		<th>Name</th>
		<th>Last Name</th>
		<th>Adress</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Working Experience</th>
		<th>Edit</th>
	</tr>
<?php
 if (isset($_POST['submit'])) {
 	$name=$_POST['ename'];
 	$address=$_POST['eaddress'];
 	include ('../dbcon.php');
 	$qry="SELECT * FROM `employee` WHERE `Firstname` like '%$name%' AND `Address`= '$address' ";
 	$run=mysqli_query($con,$qry);
    
    if (mysqli_num_rows($run)<1) {
           echo "No Employee Found.";
     } 
    else{
    	while ($data=mysqli_fetch_assoc($run)) {
    ?>
    <tr align="center">
		<td > <?php echo $data['eid'];?> </td>
		<td> <?php echo $data['Firstname'];?> </td>
		<td> <?php echo $data['Lastname'];?> </td>
		<td> <?php echo $data['Address'];?> </td>
		<td> <?php echo $data['Gender'];?> </td>
		<td> <?php echo $data['Age'];?> </td>
		<td> <?php echo $data['Working Experience'];?> </td>
		<td> <a href="delete.php ? eid= <?php echo $data['eid']; ?>">Delete</a> </td> 
	</tr>
<?php
     	}
    }
 }


 




