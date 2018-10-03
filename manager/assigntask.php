
<html>
<head>
<title>GIVE TASK TO EMPLOYEE</title>
</head>
<body>

   <form action="assigntask.php"  method="POST" enctype="multipart/form-data">
   
   
  <table align="center" border="1">
  <tr>
  <th align="center">GIVE TASK TO EMPLOYEE</th>
  </tr>
  
  <tr>
  <td>Task</td>
  <td align="center"><input type="file" name="task" value="upload"/></td>
  </tr>
  
  <tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="submit"/></td>
  </tr>
  </table>
  </form>
  </body>
  </html>
 
  <?php

$empid=$_REQUEST['eid'];
include('../dbcon.php');

if(isset($_POST['submit']))
	{ 
		$task=$_FILES['task'];
    $t=$task['name'];

		$query="INSERT INTO `task`(`eid`, `tid`, `Task`, `status`) VALUES ('$empid','','$t','')";
		$run=mysqli_query($con,$query);
		if($run==TRUE)
			{
				echo "Data Inserted Successfully";
        
			}
			
			else
				
			echo "Error!!!";
	}

?>
			