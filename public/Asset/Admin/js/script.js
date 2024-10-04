

// Drop Down Menu

let menuButtons = document.querySelectorAll(".dropdownlink");

menuButtons.forEach((button) => {
    button.addEventListener("click", function () {
        let dropIcon = this.querySelector('.drop-icon');
        let submenu = this.nextElementSibling;
        submenu.classList.toggle("active");
        dropIcon.classList.toggle("active");
    });
});

// Drop Down Menu

//  Menu Bar

const menuIcon = document.getElementById('menuIcon');


menuIcon.addEventListener('click', function () {
    this.classList.toggle('active'); // Toggle the active class on the menu icon
   
});


//  Menu Bar