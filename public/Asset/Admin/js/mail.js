// Drop Down Menu

function dropdown() {
    let mailbtn = document.querySelectorAll(".mail-dropdown-btn");
    let mail = document.querySelectorAll(".mail-dropdown");


    mailbtn.forEach(button => {
        button.addEventListener("click", function (e) {


            const id = this.dataset.toggle;

            this.classList.toggle('active');
            document.getElementById(id).classList.toggle('active');

        });
    })



    // document.addEventListener("click", function (e) {
    //     if (!mail.contains(e.target) && !mailbtn.contains(e.target)) {
    //         mail.classList.remove("active");
    //         mailbtn.classList.remove("active");
    //     }
    // });
}

dropdown();
// Drop Down Menu

function Tab() {
    const buttons = document.querySelectorAll('.mail-tab-btn');
    const tabs = document.querySelectorAll('.mail-tab-content');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.toggle;

            buttons.forEach(btn => btn.classList.remove('active'));
            tabs.forEach(tab => tab.classList.remove('active'));

            this.classList.add('active');
            document.getElementById(id).classList.add('active');
        });
    });
}

Tab();

function ModalDropDown() {
    let ModalDropDownBtn = document.querySelector("#Modal-dropdown-btn");
    let ModalDropDown = document.querySelector("#ModalDropDown");

    ModalDropDownBtn.addEventListener("click", function (e) {
        ModalDropDown.classList.toggle("active");
        e.stopPropagation();
    });

    document.addEventListener("click", function (e) {
        if (!ModalDropDown.contains(e.target) && !ModalDropDownBtn.contains(e.target)) {
            ModalDropDown.classList.remove("active");
        }
    });
}
ModalDropDown()

function MailDetailModal() {
    const buttons = document.querySelectorAll('.mail-username');
    const modalContainer = document.querySelector('.mail-detail-container');
    const modal = document.querySelector('.mail-detail-modal');
    const CloseBtn = document.querySelector('#Modal-Close-btn');

   
    buttons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.stopPropagation(); 
            modalContainer.classList.add('active');
            modal.classList.add('active');
        });
    });

    CloseBtn.addEventListener('click', function () {

        modal.classList.remove('active');

        setTimeout(() => {
            modalContainer.classList.remove('active');
        }, 50);
    });
    
    modalContainer.addEventListener('click', function () {

        modal.classList.remove('active');

        setTimeout(() => {
            modalContainer.classList.remove('active');
        }, 50);
    });

   
    modal.addEventListener('click', function (event) {
        event.stopPropagation();
    });
}


MailDetailModal();