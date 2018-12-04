var searchContainer = document.getElementById("searchContainer");
var searchFood = document.getElementById("add-search");
searchFood.addEventListener('input', searchFoodFunction, false);

function searchFoodFunction(e){
    searchContainer.innerHTML = '';
    var searchFoodVal = searchFood.value;
    var myRequest = new XMLHttpRequest;
    var url = 'process-add.php?add-search=' + searchFoodVal;
    myRequest.onreadystatechange = function(){
    	if(myRequest.readyState === 4){
    		var results = JSON.parse(myRequest.responseText);
    		for(var i=0; i<results.length; i++){
    			var newLiTag = document.createElement("li");
    			var textNode = document.createTextNode(results[i].foodName);
    			newLiTag.appendChild(textNode);
                searchContainer.appendChild(newLiTag);
    		}
    	}
    };
    myRequest.open("GET", url, true); //true means it is asynchronous // Send urls through the url
    myRequest.send(null);
}
var addBtn = document.getElementById("add-btn");
addBtn.addEventListener("click", showAddFood, false);
function showAddFood() {
    var x = document.getElementById("addfood");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        document.getElementById("addfood").style.display="block";
    }
}
