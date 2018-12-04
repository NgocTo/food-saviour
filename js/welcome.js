signUp.addEventListener("click", showSignUp, false);
logIn.addEventListener("click", showLogIn, false);

function showSignUp() {
    var x = document.getElementById("welcome");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        document.getElementById("signup").style.display="block";
        document.getElementById("login").style.display="none";
    }
}

function showLogIn() {
    var x = document.getElementById("welcome");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        document.getElementById("login").style.display="block";
        document.getElementById("signup").style.display="none";
    }
}
