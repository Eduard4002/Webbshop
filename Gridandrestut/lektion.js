window.addEventListener('load', () =>{
    const backgorundColorInput = document.querySelector('#background-color')
    const textColorInput = document.querySelector('#text-color')
    const fontSizeInput = document.querySelector('#font-size')
});
if(localStorage.getitem('item')){
    const settings = JSON.parse(localStorage.getItem('theme'))
    const body = document.querySelector('body')

    if(settings.backgorundColor)7
        body.style.backgroundColor
    }
else{
    const settings = {backgroundColor: null, textColor: null, fontSize: null}
    localStorage.setItem('theme', JSON.stringify(settings))
}

function changeBackgroundColors(event){

}