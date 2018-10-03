<?php
include('../dbcon.php');

		$eid=$_REQUEST['eid'];
		$query="DELETE FROM `employee` WHERE `eid`='$eid'";
		
		$run=mysqli_query($con,$query);
	
		if($run  == TRUE)
			{
				?>
				<script>
                       alert('Data Deleted Successfully !!');
                       window.open('deleteemployee.php','_self');
				</script>
              <?php
              }


		     
		else
			echo "Error!!!";
	

?>