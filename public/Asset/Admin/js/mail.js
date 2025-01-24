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
