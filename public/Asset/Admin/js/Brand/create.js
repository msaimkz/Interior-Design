
function Select() {

    document.querySelector('.selected-option').addEventListener('click', function () {
        const optionsList = document.querySelector('.select-options');
        optionsList.style.display = optionsList.style.display === 'block' ? 'none' : 'block';
    });

    document.querySelectorAll('.select-options li').forEach(option => {
        option.addEventListener('click', function () {
            const selected = document.querySelector('.selected-option span');
            const hiddenSelect = document.querySelector('.hidden-select option');

            selected.textContent = this.textContent;
            hiddenSelect.textContent = this.textContent;
            hiddenSelect.value = this.getAttribute('data-value');
            selected.setAttribute('data-value', this.getAttribute('data-value'));
            document.querySelector('.select-options').style.display = 'none';
        });
    });

    document.addEventListener("click", function () {
        document.querySelector('.select-options').style.display = 'none';

    })

    document.querySelector('.admin-form-select').addEventListener("click", function (event) {
        event.stopPropagation();
    });


}
Select();

function SummerNote() {

    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250,
        })
    })
}
SummerNote()