function login() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(username == "" || password == "") {
		document.getElementById("error_message").innerHTML = "Fill all the necessary details";
		return;
	}
	else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		  if(xmlhttp.readyState==4 && xmlhttp.status==200) {
		  	var response_text = xmlhttp.responseText;
		  	if(response_text.indexOf("false") != -1) {
		  		document.getElementById("error_message").innerHTML = "Incorrect username or password";
		  		return;
		  	}
		  	else if(response_text.indexOf("true") != -1) {
		  		var start_text = response_text.indexOf("id");
		  		var end_text = response_text.indexOf("end");
		  		var length = end_text - start_text - 3;
		  		var id = response_text.substr(start_text + 3, length);
		  		window.localStorage.setItem("id", id);
		  		window.location.href = "profile.html";
   			}
		  }
	    }
		xmlhttp.open("GET", "http://tulsyan-krishna.netai.net/appathon/check_login.php?username=" + username + "&password=" + password, true);
		xmlhttp.send();
	}
}