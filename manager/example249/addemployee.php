
<?php
  include('../header.php');
include('layout.php');
?>
	

       
 
<h1 align="center" >ADD EMPLOYEE PAGE</h1>

<form action="addemployee.php" method="post" enctype="multipart/form-data">
<table  border='0' align="center">



<tr>
<td>Username</td>
<td ><input type="text" name="uname1" required /></td>
</tr>


<tr>
<td>Password</td>
<td ><input type="password" name="psw1" required /></td>
</tr>

<tr>
<td>Firstname</td>
<td ><input type="text" name="fname" required /></td>
</tr>

<tr>
<td>Lastname</td>
<td ><input type="text" name="lname" required /></td>
</tr>

<tr>
<td>Gender</td>
<td ><input type="text" name="gen" required /></td>
</tr>

<tr>
<td>Age</td>
<td ><input type="text" name="ag" required /></td>
</tr>

<tr>
<td>Address</td>
<td ><input type="text" name="addr" required /></td>
</tr>

<tr>
<td>Working Experience</td>
<td ><input type="text" name="wor" required /></td>
</tr>

<tr>
<td>Image</td>
<td ><input type="file" name="image" required /></td>
</tr>

<tr>
<td colspan=2 align="center"><input type="submit" name="submit" value="submit" /></td>
</tr>

</table>
</form>
</div>
</body>
</html>
<?php
include('../../dbcon.php');
if(isset($_POST['submit']))
	{
		$uname=$_POST['uname1'];
		$passwd=$_POST['psw1'];
		$name1=$_POST['fname'];
		$name2=$_POST['lname'];
		$gender=$_POST['gen'];
		$age=$_POST['ag'];
		$adder=$_POST['addr'];
		$imagename=$_FILES['image']['name'];
		$tempname = $_FILES['image']['tmp_name'];
		move_uploaded_file($tempname,"../images/$imagename");		
		$work=$_POST['wor'];
		$query="INSERT INTO `employee`(`eid`,`image`, `eusername`, `epassword`, 
			`Firstname`, `Lastname`, `Gender`, `Age`, `Address`, `Working Experience`,`Email_id`)VALUES ('','$imagename','$uname','md5($passwd)','$name1','$name2','$gender','$age','$adder','$work','')";
		
		
		$run=mysqli_query($con,$query);
		
	
		if($run  == TRUE)
		{
			?>
<script>
alert("employee Added Sucessfully !!");
 window.open('example249/managerdash123.php','_self');
</script>
<?php
		}

		     
		else
{?>
<script>
alert("employee not added !!");
 window.open('example249/managerdash123.php','_self');
</script>
<?php
}
	}

?>