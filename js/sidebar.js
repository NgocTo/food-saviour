console.log("sidebarjs");
// FOOD SEARCH
// so the dropdown doesn't get too long should we set limit on how many results show?
// also not sure why it stopped working I didn't make any changes to this section
var searchContainer = document.getElementById("searchContainer");
var searchFood = document.getElementById("add-search");
searchFood.addEventListener('input', searchFoodFunction, false);
function searchFoodFunction(e){
    searchContainer.innerHTML = '';
    var searchFoodVal = searchFood.value;
    var myRequest = new XMLHttpRequest;
    var url = 'process-search.php?add-search=' + searchFoodVal;
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
    if(searchFoodVal.length < 1){
    	results.style.display='none';
    	return;
    }
    myRequest.open("GET", url, true);
    myRequest.send(null);
}

// OPEN ADD POPUP
var addBtn = document.getElementById("add-btn");
addBtn.addEventListener("click", showAddFood, false);
function showAddFood() {
    var popup = document.getElementById("addfood");
    if (popup.style.display === "none") {
        popup.style.display = "block";
    } else {
        popup.style.display = "block";
    }
}

//POPULATE ADD POPUP
searchContainer.addEventListener("click", getFood);
function getFood(e) {
    var li = searchContainer.querySelectorAll("li");
    for (var i = 0; i < li.length; i++) {
        var quickEntryFoodName;
        if (e.target.innerHTML == li[i].innerHTML) {
            quickEntryFoodName = li[i].innerHTML;
        }
        var myRequest = new XMLHttpRequest;
        var url = 'process-read-food-by-name.php?quick-entry-food-name=' + quickEntryFoodName;
        myRequest.onreadystatechange = function(){
        	if(myRequest.readyState === 4){
        		var results = JSON.parse(myRequest.responseText);
                console.log(results.foodName);
                foodNameValue = results.foodName;
                var foodName = document.getElementById("foodName");
                foodName.value = foodNameValue;
                showAddFood();
        	}
        };
        myRequest.open("GET", url, true);
        myRequest.send(null);
    }
}

// CLOSE ADD POPUP
function closeAddForm() {
    var popup = document.getElementById("addfood");
    popup.style.display = "none";
}
