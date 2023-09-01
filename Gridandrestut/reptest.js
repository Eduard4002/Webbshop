/*
java script DOM tut
document.getElementsByTagName(name)     för att få tag element utan att anävnade sig utav klasser och id 

ibland så kan inte saker access om window laddas först
setAttribute        kan användas för att lägga till en class och


//skapa text
const textnode = document.createTextNode("Water");
// Append the text node to the "li" node:
node.appendChild(textnode);


window.addEventListener("load", function(){
*/
window.addEventListener("load", function(){
    let containers = document.getElementsByClassName("container");
    //för att få tag på element
    let images = document.getElementsByTagName("img");
    console.log(images);
    console.log(containers[0]);
    //containers[0].setAttribute("class", "gridcont");
    containers[0].style.marginLeft = "100px";
    let x = document.createElement("div");
    x.innerHTML = "hello there";
    //appendChild kan användas för att att lägga till en child i ett element
    containers[1].appendChild(x);

    //ett sätt att hantera events utan addEventListener
    containers[2].hover = function(){alert("heyythere")}
});


