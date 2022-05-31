window.onload = function(){
    var element = document.getElementById('flex'),
    style = window.getComputedStyle(element),
    top = style.getPropertyValue('height');
    console.log(top);
    console.log("Made by Adithyan, lol");
}