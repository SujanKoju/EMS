<?php
session_start();
?>
<html>
<head>
<title>Employee Management System</title>
</head>
<body>

<h1 align = 'center'>Take Attendence</h1>

<form action = 'attendence.php' method = 'post'>
<table border = 1 align = 'center'>
<tr>
<td colspan = 2 align = 'center'><input type = 'submit' name = 'submit' value = 'Do Attendence'></td>
</tr>
</table>
</form>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
</body>
</html>

<?php
if(isset($_POST['submit']))
{
include("../dbcon.php");
$eid = $_SESSION['eid'];
$ename=$_SESSION["name"];
date_default_timezone_set("Asia/Kathmandu");
$date = date("h:i:sa");
$actTime = "8:00:00";
$diff = $date - $actTime;
echo $diff;

$query = "INSERT INTO `attendence`(`eid`, `ename`, `loginTime`) VALUES ('$eid','$ename','$date')";
$run = mysqli_query($con, $query);
if($run == TRUE)
{
?>
<script>
alert("Login time successfully recorded!");
 window.open('example249/employee.php','_self');
</script>
<?php
}

else
{
	?>
<script>
alert("ERROR!");
 window.open('example249/employee.php','_self');
</script>
<?php
}
}
?>
