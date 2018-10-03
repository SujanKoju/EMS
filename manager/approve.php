
 
<link href = "cs.css" rel = "stylesheet" type = "text/css" />
<?php 
include('../dbcon.php');
   
   
 
 $query="SELECT  leave_details.*,employee.* FROM leave_details, employee where employee.eid = leave_details.eid";
$run=mysqli_query($con,$query);


while($test =mysqli_fetch_assoc($run))
	{
    $leave_id=$test['Leave_id'];
    $id=$test['eid'];
    $leave_type=$test['Leave_type'];
	$duration=$test['Number_of_days'];
	$from_date=$test['From_date'];
	$to_date=$test['to_date'];
	$reason=$test['Reason'];
	$status=$test['Status'];
	

	
	if(isset($_POST['submit']))
		{
    $leave_type=$_POST['ltype'];
	$duration=$_POST['nod'];
	$from_date=$_POST['lfrom'];
	$to_date=$_POST['lto'];
	$reason=$_POST['reason'];
	$status=$_POST['status'];

	
			
		
$query2="UPDATE leave_details SET Leave_type='$leave_type',Number_of_days='$duration',From_date ='$from_date',to_date='$to_date',Reason='$reason',Status='$status'
WHERE Leave_id ='$leave_id'";
$retval=mysqli_query($con,$query2);


echo " Leave is $status";
if($retval==1)
{
	$query1="SELECT * FROM employee where eid='$id'";
$result1= mysqli_query($con,$query1);
while($res=mysqli_fetch_array($result1))
	{
		$name=$res['Firstname'];
		$to_id=$res['Email id'];
	}
	
$to = $to_id;
$subject = "Leave Request -Response mail- Status is '$status'";
$txt = "<p>
Dear $name,
your leave is $status </p>";
$headers = "From: memployee24@gmail.com" . "\r\n" ;


mail($to,$subject,$txt,$headers);

	
}
		}
	
		
		
	}
		
	

 ?>  
 
 <html>
 <head>
 <title>Leave Approval Document </title>
 </head>
 <body>
 <form method="post">
 <table style="width:50%" align="center" >
 <tr>
 <th colspan="2"><h3>Leave Approval Form </h3></th>
 </tr>
 <tr>
 <th ><label>Leave Type</label></td>
 <td ><input type="text" name="ltype" id="Leave_type" value="<?php echo $leave_type ?>"/>
 </td>
 </tr>
 <tr>
 <td ><label>Duration</label></td>
 <td ><input type="text" name="nod" id="nod" value="<?php echo $duration ?>">
 </td>
 </tr>
 
 <tr>
 <td  ><label>Leave From </label></td>
 <td> <input name="lfrom" id="lfrom" type="text" value="<?php echo $from_date ?>"></td>
 </tr>
 
 <tr>
 <td ><label>To </label></td>
 <td> <input name="lto" id="lto" type="text" value="<?php echo $to_date ?>"></td>
 </tr>
 
 <tr>
 <td ><label>Reason </label></td>
 <td> <textarea name="reason" id="reason" type="text" rows='3'  ><?php echo $reason?></textarea></td>
 </tr>
 
 <tr>
<td> Status</td>
<td> <input type="radio" name="status" value="Approved">Approve</td>
<td> <input type="radio" name="status" value="Declined" >Decline</td>
 </tr>
 
 <tr>
<td colspan=2 align="center"><input type="submit" name="submit" value="submit" /></td>
</tr>

</table>
</form>
</body>
</html>
 