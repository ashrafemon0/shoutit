<?php

$con = mysqli_connect('localhost','root','','shout');

if (mysqli_connect_errno()) {
	echo 'Database Conection failed:'.mysqli_connect_errno();
}


?>