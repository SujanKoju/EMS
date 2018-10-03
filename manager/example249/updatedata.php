<?php
include('../dbcon.php');

		$name1=$_POST['fname'];
		$name2=$_POST['lname'];
		$gender=$_POST['gen'];
		$age=$_POST['ag'];
		$adder=$_POST['addr'];
		$work=$_POST['wor'];
		$eid=$_POST['eid'];
		$query="UPDATE `employee` SET `eid`='$eid',`Firstname`='$name1',`Lastname`='$name2',`Gender`='$gender',`Age`='$age',`Address`='$adder',`Working Experience`='$work' WHERE `eid`='$eid'";
		
		$run=mysqli_query($con,$query);
	
		if($run  == TRUE)
			{
				?>
				<script>
                       alert('Data Updated Successfully !!');
                       window.open('update.php ? sid=<?php echo $eid ; ?>','_self');
				</script>
              <?php
              }


		     
		else
			echo "Error!!!";
	

?>