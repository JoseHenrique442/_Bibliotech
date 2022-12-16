const $html = document.querySelector('html');
const $contrast = document.querySelector('#contrast');

$contrast.addEventListener('click', ()=> {
    if (html.dataset.modo != "dark--mode") {
        html.dataset.modo = "dark--mode";
    } else {
        html.dataset.modo = "day";
    }
})