var searchContainer = document.getElementById("searchContainer");

var searchFood = document.getElementById("add-search");
// searchFood.addEventListener('input', getSearchResults, false);
searchFood.addEventListener('keydown', searchFoodFunction, false);
// var searchFoodVal;
function getSearchResults(e) {
    var searchFoodVal = searchFood.value;
    console.log('searchFoodVal : ' + searchFoodVal);
    return searchFoodVal;
}
function searchFoodFunction(e){
    var searchFoodVal = searchFood.value;
    console.log('searchFoodVal : ' + searchFoodVal);
    searchContainer.innerHTML = '';

    var myRequest = new XMLHttpRequest;
    searchContainer.innerHTML = '';
    var url = 'process-add.php?add-search=' + searchFoodVal;
    myRequest.open("GET", url, true); //true means it is asynchronous // Send urls through the url

    myRequest.onreadystatechange = function(){

    	if(myRequest.readyState === 4){

    		// console.log(myRequest.responseText);// modify or populate html elements based on response.
    		var results = JSON.parse(myRequest.responseText);
    		console.log(results);

    		for(var i=0; i<results.length; i++){
    			console.log(results[i]);

    			var newDivTag = document.createElement("div");

    			var textNode = document.createTextNode(results[i].foodName);

    			newDivTag.appendChild(textNode);

                searchContainer.appendChild(newDivTag);

    		}
    	}
    };

    myRequest.send(null);
}
