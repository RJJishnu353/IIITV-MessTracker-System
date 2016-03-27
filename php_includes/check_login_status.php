<?php
session_start();
include_once("php_includes/db_conx.php");
$user_ok = false;
$log_id = "";
$log_password = "";
$log_userType= "";

// User Verify function

function evalLoggedUser($conx,$id,$p){

		$sql = "SELECT username FROM user WHERE username='$id' AND password='$p' LIMIT 1";
        $query = mysqli_query($conx, $sql);
 
    	$numrows = mysqli_num_rows($query);

		if($numrows > 0){
			return true;
		}

}

if(isset($_SESSION["user"]) && isset($_SESSION["password"])) {

	$log_id = preg_replace('#[^a-z0-9]#i', '', $_SESSION['user']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_password);

} else if(isset($_COOKIE["id"]) && isset($_COOKIE["password"])){

	$_SESSION['user'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['id']);
    $_SESSION['password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['password']);		
	$log_id = $_SESSION['user'];
	$log_password = $_SESSION['password'];
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_password);

}

?>