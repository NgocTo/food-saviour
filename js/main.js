// ACTION EAT/TOSS
console.log('mainjs');
var actionBtn = document.getElementsByClassName("item-action-btn");
for (var i = 0; i < actionBtn.length; i++) {
    actionBtn[i].addEventListener("click", showOptions, false);
}

function showOptions(e) {
    var elem = e.target.nextElementSibling;
    elem.classList.toggle("hide");
}

// ACTION EDIT/DELETE
var itemBtn = document.getElementsByClassName("item-title");
for (var i = 0; i < actionBtn.length; i++) {
    itemBtn[i].addEventListener("click", showItemOptions, false);
}

function showItemOptions(e) {
    var elem = e.target.nextElementSibling;
    elem.classList.toggle("hide");
}

// EDIT POPUP
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
            var dateBought = document.getElementById("edit-dateBought");
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
            id.value = results[0];
            foodName.value = foodNameValue;
            dateBought.value = results.date;
            customDuration.value = customDurationValue;
            customAmount.value = customAmountValue;
        }
    };
    myRequest.open("GET", url, true);
    myRequest.send(null);
}

// CLOSE EDIT POPUP
function closeEditForm() {
    var popup = document.getElementById("editfood");
    popup.style.display = "none";
}
