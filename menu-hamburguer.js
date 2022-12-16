let hamburguer = document.querySelector('.hamburguer');
let menu = document.querySelector('.hamburguer-open');

hamburguer.addEventListener('click', ()=> {
    if(hamburguer.dataset.on == 'false') {
        hamburguer.dataset.on = 'true';
        menu.classList.add('active');
    } else {
        hamburguer.dataset.on = 'false';
        menu.classList.remove('active');
    }
})