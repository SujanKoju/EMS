<?php
  include('header.php');
 session_start();
if (isset($_SESSION["name"])) {
}else{
    
    echo "<h1 align='center'> You Are Not Login !!! </h1>";
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Employee Management System</title>
        <link href="css2/layout.css" rel="stylesheet" type="text/css" />
        <link href="css2/menu.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2 align="center">Welcome to Employee Management System</h2>
            <!--<a href="http://www.script-tutorials.com/pure-css3-lavalamp-menu/" class="stuts">Back to original tutorial on <span>Script Tutorials</span></a>
        -->
		</header>
       <div class="container">

            <ul id="nav">
                <li><a href="http://www.script-tutorials.com/">Home</a></li>
                <li><a class="hsubs" href="#">Manage Employee</a>
                    <ul class="subs">
                        <li><a href="addemployee.php">Add Employee</a></li>
                        <li><a href="update.php">Update Employee</a></li>
                        <li><a href="deleteemployee.php">Delete Employee</a></li>
                        
                    </ul>
                </li>
                <li><a class="hsubs" href="#">Attendance</a>
                    <ul class="subs">
                        <li><a href="#">Attendance Info</a></li>
                        <!--<li><a href="#">Submenu 2-2</a></li>
                        <li><a href="#">Submenu 2-3</a></li>
                        <li><a href="#">Submenu 2-4</a></li>
                        <li><a href="#">Submenu 2-5</a></li>
                        <li><a href="#">Submenu 2-6</a></li>
                        <li><a href="#">Submenu 2-7</a></li>
                        <li><a href="#">Submenu 2-8</a></li>-->
                    </ul>
                </li>
                <li><a class="hsubs" href="#">Task</a>
                    <ul class="subs">
                        <li><a href="#">Assign Task</a></li>
                        <li><a href="#">Task Status</a></li>
                        <!--<li><a href="#">Submenu 3-3</a></li>
                        <li><a href="#">Submenu 3-4</a></li>
                        <li><a href="#">Submenu 3-5</a></li>-->
                    </ul>
                </li>
				<li><a class="hsubs" href="#">Leave</a>
                    <ul class="subs">
                        <li><a href="#">Manage Leave</a></li>
                       <!--<li><a href="#">Submenu 3-3</a></li>
                        <li><a href="#">Submenu 3-4</a></li>
                        <li><a href="#">Submenu 3-5</a></li>-->
                    </ul>
                </li>
                <li><a href="#">Logout</a></li>
                
                <!--<li><a href="http://www.script-tutorials.com/pure-css3-lavalamp-menu/">Back</a></li>-->
                <div id="lavalamp"></div>
            </ul>

        </div>
    </body>
</html>