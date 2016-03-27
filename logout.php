<?php
session_start();
// Set Session data to an empty array
$_SESSION = array();
// Expire their cookie files
if(isset($_COOKIE["id"]) && isset($_COOKIE["password"])) {
	setcookie("id", '', strtotime( '-1 days' ), '/');
	setcookie("password", '', strtotime( '-1 days' ), '/');
}
// Destroy the session variables
session_destroy();
// Double check to see if their sessions exists
if(isset($_SESSION['user'])){
	header("location: message.php?msg=Error:_Logout_Failed");
} else {
	header("location: http://localhost/IIITV_Projects/Mess%20Marker/iiitv_mess/main.php");
	exit();
} 
?>