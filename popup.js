

function toggleMainPopup() {
    var x = document.getElementById("PopupWindow");
    console.log(x.dataset.closable);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function MobilePopup() {

    var MobileMenu = document.getElementById("MobileNav"); 
    var Footer = document.getElementById("Footer")
    var Products = document.getElementById("gridcont")
    if (MobileMenu.style.display === "none") {
        MobileMenu.style.display = "flex";
        Footer.style.display = "none";
        Products.style.display ="none";
    } else {
        MobileMenu.style.display = "none";
        Footer.style.display = "flex";
        Products.style.display = "grid";
    }
}


