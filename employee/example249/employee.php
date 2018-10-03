<?php
session_start();
$username=strtoupper($_SESSION["name"]);
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Employee Management System</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2 align="center"><?php echo "WELCOME"." ".$username."." ?></h2>
            <!--<a href="http://www.script-tutorials.com/pure-css3-lavalamp-menu/" class="stuts">Back to original tutorial on <span>Script Tutorials</span></a>
        -->
		</header>
       <div class="container">

            <ul id="nav">
                <li><a href="employee.php">Home</a></li>
                <li><a class="hsubs" href="#">Attendance</a>
                    <ul class="subs">
                        <li><a href="../attendence.php">Take Attendance</a></li>
                        <li><a href="../attendenceinfo.php">View Attendance</a></li>
                        
                        
                    </ul>
                </li>
                <li><a class="hsubs" href="../companypolicy.php">View Policy</a>
                   <!-- <ul class="subs">
                        
                        <!--<li><a href="#">Submenu 2-2</a></li>
                        <li><a href="#">Submenu 2-3</a></li>
                        <li><a href="#">Submenu 2-4</a></li>
                        <li><a href="#">Submenu 2-5</a></li>
                        <li><a href="#">Submenu 2-6</a></li>
                        <li><a href="#">Submenu 2-7</a></li>
                        <li><a href="#">Submenu 2-8</a></li>
                    </ul>-->
                </li>
                <li><a class="hsubs" href="#">Task</a>
                    <ul class="subs">
                        
                        <li><a href="../task.php">Task Status</a></li>
                        <!--<li><a href="#">Submenu 3-3</a></li>
                        <li><a href="#">Submenu 3-4</a></li>
                        <li><a href="#">Submenu 3-5</a></li>-->
                    </ul>
                </li>
				<li><a class="hsubs" href="#">Leave</a>
                    <ul class="subs">
                        <li><a href="../leave.php">Post Leave Letter</a></li>
                       <li><a href="../leavehistory.php">View leave Status</a></li>
                       <!-- <li><a href="#">Submenu 3-4</a></li>
                        <li><a href="#">Submenu 3-5</a></li>-->
                    </ul>
                </li>
                
                <li><a href="../logout.php">Logout</a></li>
                
                <!--<li><a href="http://www.script-tutorials.com/pure-css3-lavalamp-menu/">Back</a></li>-->
                <div id="lavalamp"></div>
            </ul>

        </div>
    </body>
</html>