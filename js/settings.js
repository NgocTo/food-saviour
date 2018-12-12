console.log("settingsjs");
var settingBtn = document.getElementById("setting-btn");
settingBtn.addEventListener("click", showSettings, false);
function showSettings(e) {
    settingBtn.children[2].classList.toggle("hide");
}
