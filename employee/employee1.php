<?php
session_start();
$username=strtoupper($_SESSION["name"]);
?>
<html>
<head>
	<title> Employee Login.</title>
<link href = "../css/style.css" rel = "stylesheet" type = "text/css" />
</head>
<body>
<h4><a href="logout.php" style="float:right; margin-right:20px; font-size:20px;">Logout</a></h4>
   <h1 align = "center"> <?php echo "WELCOME"." ".$username."." ?> </h1>
   <h1>Select Feature </h1>
   1.<a href="attendence.php" style= "font-size:25px; ">Attendence.</a></br>
   2.<a href="attendenceinfo.php" style= "font-size:25px">View Attendence Information.</a></br>
   3.<a href="leave.php" style= "font-size:25px">Leave Request.</a></br>
   4.<a href="companypolicy.php" style= "font-size:25px">View Company Policy.</a></br>
   5.<a href="leavehistory.php" style= "font-size:25px">View Leave History.</a></br>
   6.<a href="searchemplyee.php" style= "font-size:25px">Search Employee.</a></br> 
   7.<a href="task.php" style= "font-size:25px">Task Section.</a></br>

</body>
</html>
