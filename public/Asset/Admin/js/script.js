

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
    this.classList.toggle('active'); 
   
});


//  Menu Bar


//  Profile Drop Down

let profilebtn = document.querySelector('.header-profile');
let profile = document.querySelector('.profile-dropdown');
let main = document.querySelector('.main');

profilebtn.addEventListener('click', function(e) {
    profile.classList.toggle('active');
    e.stopPropagation(); 
});


document.addEventListener('click', function(e) {
    if (!profile.contains(e.target) && !profilebtn.contains(e.target)) {
        profile.classList.remove('active');
    }
});



//  Profile Drop Down


//  Side Bar


let menubtn = document.querySelector('#menuBar');
let sidebar = document.querySelector('.sidebar');
let mainContent = document.querySelector('.main-content');
let header = document.querySelector('.header');


menubtn.addEventListener('click', function(e) {
    sidebar.classList.toggle('active');
    mainContent.classList.toggle('active');
    header.classList.toggle('active');
    
});


//  Side Bar
