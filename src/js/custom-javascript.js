// Add your JS customizations here

/**
 * Add class sticky on header when scrolldown.
 */

window.addEventListener('scroll', function() {
    const header = document.querySelector('#wrapper-navbar');
    header.classList.toggle('sticky', window.scrollY > 0);
});