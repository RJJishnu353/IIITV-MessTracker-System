<?php

include_once("php_includes/check_login_status.php");

// If user is already logged in, header that weenis away

if($user_ok == true){

	header("location: marker.php");

    exit();
}

//echo "header_over";
// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if(isset($_GET['username']) && $_GET['password']){

	// CONNECT TO THE DATABASE
	include_once("php_includes/db_conx.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
	$u = mysqli_real_escape_string($db_conx, $_GET['username']);
	$p = md5($_GET['password']);
	
		$sql = "SELECT username, password FROM user WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);	
        $row = mysqli_fetch_row($query);
		$db_id = $row[0];
		$db_password = $row[1];
		if($p != $db_password){
			echo "login_failed";
            exit();
		} else {
			// CREATE THEIR SESSIONS AND COOKIES
			
			$_SESSION['user'] = $db_id;
			
			$_SESSION['password'] = $db_password;

			setcookie("id", $db_id, strtotime( '+1 days' ), "/", "", "", TRUE);
			setcookie("password", $db_password, strtotime( '+1 days' ), "/", "", "", TRUE);
	
		}

    	    echo $u;

    	     exit();
		
		}
	
	

?>
