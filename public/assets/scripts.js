
menubar = document.getElementById("menubar");
navbar = document.getElementById("navbar");

menubar.addEventListener("click", () => {
    console.log('clicked');
    navbar.classList.toggle('active');
} )