
<?php

session_start();

$message="";

if(count($_POST)>0)
{

$con = mysqli_connect('localhost','root','','mca',3308) or die('Unable To connect');

$result = mysqli_query($con,"SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '".   $_POST["password"]."'");

$row  = mysqli_fetch_array($result);

if(is_array($row)) {

$_SESSION["id"] = $row['id'];

$_SESSION['username'] = $row['username'];

} else {

$message = "Invalid Username or Password!";

}
}
if(isset($_SESSION["id"])) {

$logincount ++;

header("Location:php3-A.php");
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>login form</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">


</head>

<body>

<div class="container">

<form action="" method="post">

<header><h1>LOGIN FORM</h1></header>
<table>
<tr>
<th colspan="2">USER LOGIN FORM</th>
</tr>

<tr>
<td><label>USERNAME:</label></td>

<td><input type="text" name="username" required></td>

</tr>


<tr>
<td><label>PASSWORD:</label></td>

<td><input type="PASSWORD" name="password" required></td>

</tr>

<tr>


<th colspan="2"><button class="btn btn-primary"><input type="submit" name="submit" value="login"></button>

</tr>


</table>

<?php   echo " " . $message; ?>

</form>
</div>


</body>
</html>