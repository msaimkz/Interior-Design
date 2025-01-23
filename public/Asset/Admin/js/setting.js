
function toggleCheckbox() {

    $('.setting-right-content-checkbox').click(function () {
        $('.setting-right-content-checkbox').toggleClass('active')
    })
}


toggleCheckbox()


function Tab() {
    const buttons = document.querySelectorAll('.setting-tab');
    const tabs = document.querySelectorAll('.setting-right-tab');

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
