function Tab() {
    const buttons = document.querySelectorAll('.support-left-head-child');
    const tabs = document.querySelectorAll('.support-left-content-tab');

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