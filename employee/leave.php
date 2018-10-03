
<?php 
session_start();
$empid=$_SESSION['eid'];
include('../header.php');
?>
<h1 align="center">LEAVE APPLICATION FORM </h1>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
<form method="post" action="leave.php">
<table style="width:50%" align="center">

<tr>
<td align="right">Leave Type</td>
<td>
    <select name="ltype">
	  
	   <option value="Casual_Leave">Causal Leave</option>
	   <option value="Official_Work_Leave">Official Work Leave</option>
	   <option value="Sick_Leave">Sick Leave</option>
	   </select>
	   </td>
	   
</tr>

<tr>
<td align="right">Duration</td>
<td >
<select name="nod">
    <option value="Full_day">Full Day</option>
	  <option value="Half_day">Half Day</option>
</td>
</tr>

<tr>
<td align="right">Leave From</td>
<td><input type="date" name="lfrom" required></td>
</tr>

<tr>
<td align="right">To</td>
<td><input type="date" name="lto" required></td>
</tr>

<tr>
<td height="63" align="right" >Reason</td>
<td><textarea name="reason" type="text" rows='3'/></textarea></td>
</tr>

<tr>
<td colspan="2" align="center" ><input type="submit" name="submit" value="submit"></td>
</tr>


</table>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$leave_type=$_POST['ltype'];
	$duration=$_POST['nod'];
	$from_date=$_POST['lfrom'];
	$to_date=$_POST['lto'];
	$reason=$_POST['reason'];
	
	$query="INSERT INTO `leave_details`(`Leave_id`, `eid`, `Leave_type`, `Number_of_days`, `From_date`, `To_date`, `Reason`, `Status`) VALUES ('','$empid','$leave_type','$duration','$from_date','$to_date','$reason','')";
	$run=mysqli_query($con,$query);
	echo $run;
	
	$last_id =mysqli_insert_id($con);
	
	if($run ==1)
		{
			$result=mysqli_query("SELECT * FROM employee where eid=$empid");
			while($test=mysqli_fetch_array($result))
           {
	    
		$name1=$test['fname'];
        $name2=$test['lname'];
		$gender=$test['gen'];
		$age=$test['ag'];
		$adder=$test['addr'];
		$email_id=$test['emailid'];
		$work=$test['wor'];
		   }
		   $subject="Leave Notification Mail from the employee $name1.$name2";
		   $to="bhandariroshan362@gmail.com";
		   
		   $headers='MIME-Version :1.0'."\r\n";
		 $headers.='Content-type: text/html; charset=iso-8859-1'."\r\n";
		   $headers .="From:$name1.$name2<$email_id>"."\r\n";
		   
		   $message="<p>Sir,<br/>
		   
		   Name :$name1.$name2<br/>
		   Employee code: $id <br/>
		   Gender:$gender<br/>
		   Age:$age<br/>
		   Address:$adder <br/>
		   Working Experience:$work <br/>
		   Contact Number :$contact_no<br/><br/>
		   I need leave from $from_data to $to_date.The reason for the leave is $reason.<br/>
		   I request you to kindly approve my leave.<br/><br/><br/>
		   
		   Thanking you in anticipation.<br/>
		   Regards,<br/>
		   $name1.$name2<br/></p>";
		   
		   mail($to,$subject,$message,$headers);
		   ?>
	<script>
	alert('Sucessfully Sent!!!!!');
	window.open('example249/employee.php', '_self');
	</script>
	<?php
		}
}

		
		   

?>
</form>
</body>
</html>

