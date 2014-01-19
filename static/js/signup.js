function signup() {
	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;
	var gender = $('input[name="sex"]:checked').val();
	var diet = $('input[name="diet"]:checked').val();
	var email = document.getElementById("email").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var verify_password = document.getElementById("verify_password").value;
	if(username == "" || password == "" || email == "" || username == "" || password == "" || verify_password == "") {
		document.getElementById("error_message").innerHTML = "Fill all the necessary details";
		return;
	}
	else if(password != verify_password) {
		document.getElementById("error_message").innerHTML = "Passwords do not match";
		return;
	}
	else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		  if(xmlhttp.readyState==4 && xmlhttp.status==200) {
		  	var response_text = xmlhttp.responseText;
		  	if(response_text.indexOf("true") != -1) {
		  		window.location.href = "profile.html";
		  	}
		  	else {
   				document.getElementById("error_message").innerHTML = response_text;
   				return;
   			}
		  }
	    }
		xmlhttp.open("GET", "http://tulsyan-krishna.netai.net/appathon/check_signup.php?first_name=" + first_name + "&last_name=" + last_name + "&gender=" + gender + "&diet=" + diet + "&email=" + email + "&username=" + username + "&password=" + password, true);
		xmlhttp.send();
	}
}