let html = document.querySelector('html');
let fontSize = document.getElementById('font-size');
let x;
let fontValue = getComputedStyle(html).getPropertyValue('font-size'); 

fontSize.addEventListener('click', () => {
    fontValue = parseFloat(fontValue); 
    x = parseInt((fontValue*100)/16);
    if (html.classList == "normal") {
        html.classList.remove('normal');
        html.classList.add('up');
        x =  x + (x*0.01);  
        html.style.fontSize = x  + "%";   
    } else if (html.classList == "up") {
        html.classList.remove("up");
        html.classList.add('normal');
        html.style.fontSize = x + "%";
    }
})