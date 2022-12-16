let btn = document.querySelector("#password__input svg");
btn.addEventListener('click', ()=> {
    let input = document.querySelector("#password");
    if (input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
    } else {
        input.setAttribute('type', 'password');
    }
})