var actionBtn = document.getElementsByClassName("item-action-btn");
for (var i = 0; i < actionBtn.length; i++) {
    actionBtn[i].addEventListener("click", showOptions, false);
}

function showOptions(e) {
    var elem = e.target.nextElementSibling;
    elem.classList.toggle("hide");
}