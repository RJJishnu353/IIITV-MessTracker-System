<?php

include_once("php_includes/check_login_status.php");

// If user is already logged in, header that weenis away

if($user_ok == true){

	header("location: trackerSystem.php");

}else{

	header("location: notLoggedInError.php");

}

 ?>