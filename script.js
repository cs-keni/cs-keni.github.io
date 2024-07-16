import 'boxicons';

function openMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('open');
}

document.addEventListener('DOMContentLoaded', function() {
    const contactButton = document.getElementById('contactButton');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');

    contactButton.addEventListener('click', function() {
        popup.classList.add('active');
    });

    closePopup.addEventListener('click', function() {
        popup.classList.remove('active');
    });

    window.addEventListener('click', function(event) {
        if (event.target == popup) {
            popup.classList.remove('active');
        }
    });
});
