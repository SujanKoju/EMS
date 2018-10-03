<?php
  include('../header.php');
include('layout.php');
?>

 
<h1 align="center" ><B><u>EMPLOYEE INFORMATION UPDATE PAGE. </u></B></h1>
<table align="center">
<form action="update.php" method="post">
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
		<th>Image</th>
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
		<td ><img src="../images/<?php echo $data ['image']; ?>"style="max-width:100px" /> </td>
		<td> <?php echo $data['Firstname'];?> </td>
		<td> <?php echo $data['Lastname'];?> </td>
		<td> <?php echo $data['Address'];?> </td>
		<td> <?php echo $data['Gender'];?> </td>
		<td> <?php echo $data['Age'];?> </td>
		<td> <?php echo $data['Working Experience'];?> </td>
		<td> <a href="updateform.php ? eid=<?php echo $data['eid']; ?>">Edit</a> </td> 
	</tr>
</div>
<?php
     	}
    }
 }


 




