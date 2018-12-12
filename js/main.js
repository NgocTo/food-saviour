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
var editBtn = document.getElementById("edit-btn");
editBtn.addEventListener("click", showEditFood, false);
function showEditFood() {
    var x = document.getElementById("editfood");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        document.getElementById("editfood").style.display="block";
    }
}
