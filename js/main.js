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
