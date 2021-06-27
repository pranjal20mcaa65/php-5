<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<hr>

<center><h1>WELCOME TO USER PAGE</h1></center>

<hr>

<?php
if($_SESSION["username"] &&  $_SESSION["id"]) {
?>
<center>Welcome:<strong><h1><?php echo $_SESSION["username"]; ?></h1></strong> <br>your Id number is <?php echo $_SESSION["id"]; ?></center>
your are an authenticated user;
<?php

}else echo"UNAUTHORISED ACCESS, ERROR CODE - AX#)##!";
?>
<hr>
<p>Click here to </p><button class="btn btn-danger"><a href="3b.php"> logout</a></button>
</body>
</html>