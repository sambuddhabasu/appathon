var id = window.localStorage.getItem("id");
var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		  if(xmlhttp.readyState==4 && xmlhttp.status==200) {
		  	var content = xmlhttp.responseText;
		  	var start_username = content.indexOf("username=");
		  	var end_username = content.indexOf("&rating=");
		  	var username = content.substr(start_username + 9, end_username - start_username - 9);
		  	var start_rating = content.indexOf("&rating=");
		  	var end_rating = content.indexOf("end");
		  	var rating = content.substr(start_rating + 8, end_rating - start_rating - 8);
		  	document.getElementById("get_username").innerHTML = username;
		  	document.getElementById("get_rating").innerHTML = rating;
		  }
	    }
xmlhttp.open("GET", "http://tulsyan-krishna.netai.net/appathon/check_id.php?id=" + id, true);
xmlhttp.send();