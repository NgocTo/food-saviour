// action eat/toss
console.log('mainjs');
var actionBtn = document.getElementsByClassName("item-action-btn");
for (var i = 0; i < actionBtn.length; i++) {
    actionBtn[i].addEventListener("click", showOptions, false);
}

function showOptions(e) {
    var elem = e.target.nextElementSibling;
    elem.classList.toggle("hide");
}

// action edit/delete
var itemBtn = document.getElementsByClassName("item-title");
for (var i = 0; i < actionBtn.length; i++) {
    itemBtn[i].addEventListener("click", showItemOptions, false);
}

function showItemOptions(e) {
    var elem = e.target.nextElementSibling;
    elem.classList.toggle("hide");
}

// edit entry
function showEditPopup(foodId) {
    var x = document.getElementById("editfood");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display="block";
    }
    var id = foodId;
    var myRequest = new XMLHttpRequest;
    var url = 'process-read-userfood-by-id.php?id=' + id;
    myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){
            var results = JSON.parse(myRequest.responseText);
            console.log(results);
            var id = document.getElementById("edit-id");
            var foodName = document.getElementById("edit-foodName");
            var customDuration = document.getElementById("edit-customDuration");
            var customAmount = document.getElementById("edit-customAmount");
            var foodNameValue;
            var customDurationValue;
            var customAmountValue;
            if (results.customFoodName !== null) {
                foodNameValue = results.customFoodName;
            } else {
                foodNameValue = results.foodName;
            }
            if (results.customDuration !== null) {
                customDurationValue = results.customDuration;
            } else {
                customDurationValue = results.duration;
            }
            if (results.customAmount !== null) {
                customAmountValue = results.customAmount;
            } else {
                customAmountValue = 1;
            }
            console.log(foodNameValue);
            id.value = results[0];
            foodName.value = foodNameValue;
            customDuration.value = customDurationValue;
            customAmount.value = customAmountValue;
        }
    };
    myRequest.open("GET", url, true);
    myRequest.send(null);
}

// CLOSE POP UP
function closeForm() {
    var popup = document.getElementById("addfood");
    popup.style.display = "none";
}
