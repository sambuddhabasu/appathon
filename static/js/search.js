function search () {
	var q = document.getElementById("search-bar").value;
	window.localStorage.setItem("search_query",q);
	window.location.href = "browse_recipe.html";
}