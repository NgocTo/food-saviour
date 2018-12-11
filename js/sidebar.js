// food search
// so the dropdown doesn't get too long should we set limit on how many results show?
// also not sure why it stopped working I didn't make any changes to this section 
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
    if(searchFoodVal.length < 1){
    	results.style.display='none';
    	return;
    }
    myRequest.open("GET", url, true);
    myRequest.send(null);
}

// quick entry
// id="addfood" // the popup form
// id="foodName" // empty input field that needs to be filled in
// id="add-search" // quick entry search input
// id="add-btn" // button to search
var popup = document.getElementById("addfood");
var popupValue = document.getElementById("foodName");
var quickEntry = document.getElementById("add-search");
var quickEntryValue = quickEntry.getAttribute("value");
var addBtn = document.getElementById("add-btn");
addBtn.addEventListener("click", showAddFood, false);
function showAddFood() {
    if (popup.style.display === "none") {
        popup.style.display = "block";
        popupValue.setAttribute("value", quickEntryValue);
    } else {
        popup.style.display = "block";
    }
}
