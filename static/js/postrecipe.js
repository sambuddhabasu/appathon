function post_recipe() {
	var recipe_name = document.getElementById("recipe_name").value;
	var tags = document.getElementById("tags").value;
	var instructions = document.getElementById("instructions").value;
	var id = window.localStorage.getItem("id");
	if(recipe_name == "" || tags == "" || instructions == "") {
		document.getElementById("error_message").innerHTML = "Fill up the details";
		return;
	}
	else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
		  if(xmlhttp.readyState==4 && xmlhttp.status==200) {
		  	var response_text = xmlhttp.responseText;
		  	if(response_text.indexOf("false") != -1) {
		  		document.getElementById("error_message").innerHTML = "Recipe name already exists";
		  	}
		  	else {
   				window.location.href = "profile.html";
   			}
		  }
	    }
		xmlhttp.open("GET", "http://tulsyan-krishna.netai.net/appathon/post_recipe.php?id=" + id + "&recipe_name=" + recipe_name + "&tags=" + tags + "&instructions=" + instructions);
		xmlhttp.send();
	}
}