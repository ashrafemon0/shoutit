<?php include "db.php";?>
<?php
if (isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['Messasge']);

	//Set Time Zone
date_default_timezone_set('America/New_York');
$time = date('h:i:s a',time());

//validet user
if (!isset($user) || $user == '' || !isset($message) || $message == '') {
	$error = "Filed Must Not Be Empty";
	header("Location: index.php?error=".urlencode($error));
	exit();
}else{
	$query = "INSERT INTO shoutsit (user, message, tim) 

	VALUES ('$user','$message','$time')";
	if (!mysqli_query($con, $query)) {
	die('Error:'.mysqli_error($con));
}else{
	header("Location: index.php");
	exit();
  }
 }


 }



?>