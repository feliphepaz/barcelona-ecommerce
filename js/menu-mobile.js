const btnMobile = document.querySelector('.conta-categorias-btn');
const menuMobile = document.querySelector('.menu-header');

btnMobile.addEventListener('click', (e) => {
    e.preventDefault();
    menuMobile.classList.toggle('active-mob');
    if (menuMobile.classList.contains('active-mob')) {
        btnMobile.innerText = '✗';
    } else {
        btnMobile.innerText = '☰';
    }
})