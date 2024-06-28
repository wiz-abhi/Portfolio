let menuIcon = document.querySelector('#menu-icon'); // Corrected 'meny-icon' to 'menu-icon'
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => { // Changed 'Onclick' to 'onclick'
    menuIcon.classList.toggle('fa-x');
    navbar.classList.toggle('active');
};

let sections = document.querySelectorAll('section'); // Changed 'sections' to 'section'
let navlinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navlinks.forEach(link => { // Changed 'links' to 'link' and fixed the use of forEach
                link.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });

    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 100);
};

// Move the following lines inside the window.onscroll function or another function
menuIcon.classList.remove('fa-xmark');
navbar.classList.remove('active');


