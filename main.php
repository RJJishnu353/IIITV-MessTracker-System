<?php

include_once("php_includes/check_login_status.php");

// If user is already logged in, header that weenis away

if($user_ok == true){

  header("location: marker.php");

    exit();
}


 ?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="author" content="P Jishnu Jaykumar">

    <meta name="description" contetn="IIIT Vadodara Mess Tracking System">

    <meta name="version" content="1.0">
    
    <title>Login to your account</title>
  
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/styles.css">
    
    <style type="text/css" media="screen">
    	
    #login_button{

         background: #800080;
         color: white;
         font-family: sans-serif;

    }

    </style>

</head>

  <body class="login-page">
    
<div class="login-form-container">
  
  <form method="post">

  <div class="login-form">
  
    <div class="form-title">

      <a href="http://www.iiitvadodara.ac.in" target="_blank"><img src="images/logo_iiitv.png" class="img-responsive" alt="Image"></a>

    </div>

    <div class="form-body">
      

<div id="div_id_email" class="control-group">

  <label class="control-label requiredField" id="unameErrorMsg">Username </label>
    
    <div class="controls">
    
    <input id="username" name="username" maxlength="75" name="email" type="text"> 

    </div>
    
</div>
  
    <div id="div_id_password" class="control-group">
    
      <label for="id_password" class="control-label requiredField" id="pwdErrorMsg">Password </label>
				
        <div class="controls">

          <input id="password" name="password" type="password"> 

        </div>

    </div>

    <div id="status" class="control-group" style="color: red;">
      


    </div>
    
    </div>

      <div class="form-buttons">

          <input id="login_button" class="btn btn-block btn-primary" onclick="checkOnLogin()" value="Login">
      
      </div>
    
  </div>

  <ul class="form-links">
    
    <li><a href="" >Forgot your password?</a></li>
    
    <li><a href="">Create Your Account</a></li>

  </ul>

  </form>

</div>

    <script src="bootstrap-3.3.6-dist/js/jquery.js"></script>

    <script src="bootstrap-3.3.6-dist/js/jis.js"></script>

</body>

</html>