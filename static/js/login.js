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
   			 document.getElementById("error_message").innerHTML = xmlhttp.responseText;
		  }
	    }
		xmlhttp.open("GET", "http://tulsyan-krishna.netai.net/appathon/check_login.php?username=" + username + "&password=" + password, true);
		xmlhttp.send();
	}
}