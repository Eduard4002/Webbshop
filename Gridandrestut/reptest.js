/*
java script DOM tut
document.getElementsByTagName(name)     för att få tag element utan att anävnade sig utav klasser och id 

ibland så kan inte saker access om window laddas först
setAttribute        kan användas för att lägga till en class och


//skapa text
const textnode = document.createTextNode("Water");
// Append the text node to the "li" node:
node.appendChild(textnode);


//document.elementFromPoint(2, 2);              lär dig mer om 
elem = document.elementFromPoint(2, 2);




window.addEventListener("load", function(){
*/

let x;
window.addEventListener("load", function(){
    let containers = document.getElementsByClassName("container");
    //för att få tag på element
    //document.getElementsByTagName("img");     returnerar en array med alla img
    let images = document.getElementsByTagName("img");
    console.log(images);
    console.log(containers[0]);
    //containers[0].setAttribute("class", "gridcont");
    //containers[0].style.marginLeft = "100px";
    let x = document.createElement("div");
    //x.innerHTML = "hello there";
    //appendChild kan användas för att att lägga till en child i ett element
    //containers[0].appendChild(x);

    //ett sätt att hantera events utan addEventListener
    // containers[2].hover = function(){alert("heyythere")}
    
    console.log(containers[0]);
    for(let y = 0; y < containers.length; y++){
        containers[y].id = y.toString();
    }
    /*
    document.addEventListener("mouseover", () =>{
        console.log("hello");
    });
    */
});

function func(event){
    let containers = document.getElementsByClassName("container");
    let b = document.elementsFromPoint(event.clientX, event.clientY);
    

}

function funcexp(idstuff){
    //alert(idstuff);
    document.getElementById(idstuff).style.height = "600px";
}

function funcdescr(idstuff){
    
    document.getElementById(idstuff).style.height = "400px";
}

