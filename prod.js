
window.addEventListener("load", function(){
    elem = document.getElementById("cont");
    currentheight = elem.offsetHeight -16;
    elemheight = getComputedStyle(document.querySelector(":root"));
    //document.querySelector(":root").style.setProperty('--test', currentheight.toString())
    //elem.style.height = elemheight.getPropertyValue('--test')
/*
    elementheight = elemheight.getPropertyValue('--test');
    console.log(currentheight);
*/
    //setProperty används för att ändra på :root variablar
    //document.querySelector(":root").style.setProperty('--test', currentheight.toString());
    //console.log(elemheight.getPropertyValue('--test'));
    elem.addEventListener("hover", listn);
   
});


function listn(){
    text = document.getElementById("desc");
    console.log(text);
    text.style.color = "yellow";
}
/*
    element.classList.add   för att lägga till en klass i ett element
    animation-name: example;
    animation-duration: 4s;

     getComputedStyle(r);       för att ta styles som finns inne psudoelementet
*/
/*
function listn(){ 
    console.log("say hi");
    console.log(currentheight);
    elem.style.animationName  = "example";
    elem.style.animationDuration = "3s"; 
}
*/
