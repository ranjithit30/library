<?php
session_start();
$message="";
if(count($_POST)>0) {
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM admin WHERE (password='" . $_POST["password"] . "'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["password"] = $row[password];


} else {
$message = "Invalid Password!";
}

}
if(isset($_SESSION["password"])) {
echo "Success";
}

?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>