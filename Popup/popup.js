function closeAllElements() {
    var elements = document.querySelectorAll("[data-closable='true']");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = "none";
    }
}


function Popup(elementID) {
    closeAllElements(); // Close all open elements
    var x = document.getElementById(elementID);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function toggleMainPopup() {
    var x = document.getElementById("PopupWindow");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


function LogIn() {
    Popup("LogInWindow"); // Call Popup function with the ID
}

function closePopup(elementID) {
    var x = document.getElementById(elementID);
    x.style.display = "none";
}


function SignUp() {
    Popup("SignUpWindow"); // Call Popup function with the ID
}
