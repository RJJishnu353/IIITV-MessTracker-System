
function createXHR(){

  return new XMLHttpRequest();
  
}

function checkOnLogin(){

	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var u_error = document.getElementById('unameErrorMsg');
	var p_error = document.getElementById('pwdErrorMsg');

	var status1 = false;
	var status2 = false; 

	if(username.value == ""){

		username.style.borderColor = "red";
		u_error.style.color = "red";
		u_error.innerHTML = "Please provide username";

	}else{

		username.style.borderColor = "#ddd";
		u_error.style.color = "#444";
		u_error.innerHTML = "Username";
		status1=true;

	}

	if(password.value.length == 0){

		password.style.borderColor = "red";
		p_error.style.color = "red";
		p_error.innerHTML = "Please provide password";

	}else{

		password.style.borderColor = "#ddd";
		p_error.style.color = "#444";
		p_error.innerHTML = "Password";
		status2=true;

	}

	if(status1==true && status2 == true){

	var xhr = createXHR();
  
    //window.location = "";

  		xhr.onreadystatechange = function getInfo(){
  
 		   if(xhr.readyState == 4 && xhr.status == 200){   
      
      		var response = xhr.responseText;

      			//alert("response:" + response);
    
      			if(response == 'login_failed'){

      				document.getElementById('status').innerHTML = "Incorrect username or password";

      			}else{

      				window.location = "marker.php";

      			}

   			 }

  	};
  
  //var place = document.getElementById('currentPlace');

  //alert("xhr.readystate = " + xhr.readystate + " xhr.status " + xhr.status);
  
  xhr.open("GET","login.php?username="+username.value+"&password="+password.value,true);
  
  xhr.send();

}

}