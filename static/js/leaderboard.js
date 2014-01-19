$(document).ready(function() {
	var contents  = "<table><tr><td>Rank</td><td>Username</td><td>Rating</td></tr>";
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		  if(xmlhttp.readyState==4 && xmlhttp.status==200) {
		  	var response_text = xmlhttp.responseText;
		  	var start_json = response_text.indexOf("start=");
		  	var end_json = response_text.indexOf("=end");
		  	var main = response_text.substr(start_json + 6, end_json - start_json - 6);
		  	var content_string = JSON.parse(main);
		  	var max = content_string.length;
		  	var j=1;
		  	for(var i=max-1;i>=0;) {
		  		contents = contents + "<tr><td>" + j + "</td><td>" + content_string[i-1] + "</td><td>" + content_string[i] + "</td><tr>";
		  		i -= 2;
		  		j += 1;
		  	}
		  	contents = contents + "</table>";
			document.getElementById("leaderboard_container").innerHTML = contents;
		  }
	    }
		xmlhttp.open("GET", "http://tulsyan-krishna.netai.net/appathon/get_leaderboard.php", true);
		xmlhttp.send();
});