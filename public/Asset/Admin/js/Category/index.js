function dropdown() {
    document
        .getElementById("dropdown1")
        .addEventListener("click", function (e) {
            e.stopPropagation();
        });

    document
        .getElementById("exportButton")
        .addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            const secondDropdown = document.getElementById("dropdown2");
            if (
                secondDropdown.style.display === "none" ||
                secondDropdown.style.display === ""
            ) {
                secondDropdown.style.display = "block";
            } else {
                secondDropdown.style.display = "none";
            }
        });

    document
        .getElementById("dropdown2")
        .addEventListener("click", function (e) {
            e.stopPropagation();
        });

    document.addEventListener("click", function (e) {
        const secondDropdown = document.getElementById("dropdown2");
        if (!secondDropdown.contains(e.target)) {
            secondDropdown.style.display = "none";
        }
    });
}
dropdown();

function ShowCheckbox() {
    const ShowCheckBoxBtn = document.querySelector("#ShowCheckBoxBtn");
    const MainCheckBox = document.querySelector(".CheckInputThead");
    const SubCheckBox = document.querySelectorAll(".CheckInputTbody");

    ShowCheckBoxBtn.addEventListener("click", function () {
        MainCheckBox.classList.add("active");
        SubCheckBox.forEach(function (element) {
            element.classList.add("active");
        });
    });

    document.addEventListener("click", function () {
        MainCheckBox.classList.remove("active");
        SubCheckBox.forEach(function (element) {
            element.classList.remove("active");
        });
    });

    MainCheckBox.addEventListener("click", function (e) {
        e.stopPropagation();
    });

    SubCheckBox.forEach(function (element) {
        element.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    });
}
ShowCheckbox();

function selectMultipleCheck() {
    const MainCheckBox = document.querySelector(".CheckInputThead input");
    const SubCheckBox = document.querySelectorAll(".CheckInputTbody input");
    const DropDeleteBtn = document.querySelector(".drop-delete-btn");

    MainCheckBox.addEventListener("input", function () {
        if (MainCheckBox.checked) {
            SubCheckBox.forEach(function (element) {
                element.checked = true;
            });
            DropDeleteBtn.classList.add("delActive");
        } else {
            SubCheckBox.forEach(function (element) {
                element.checked = false;
            });
            DropDeleteBtn.classList.remove("delActive");
        }
    });

    SubCheckBox.forEach(function (element) {
        element.addEventListener("input", function () {
            const anyChecked = Array.from(SubCheckBox).some((cb) => cb.checked);

            if (anyChecked) {
                DropDeleteBtn.classList.add("delActive");
            } else {
                DropDeleteBtn.classList.remove("delActive");
            }
        });
    });
}

selectMultipleCheck();

function DeleteMultipleRecord() {
    const DeleteBtn = document.querySelector(".drop-delete-btn");
    const SubCheckBox = document.querySelectorAll(".CheckInputTbody input");

    DeleteBtn.addEventListener("click", function () {
        const RecordIds = Array.from(SubCheckBox).map(
            (checkbox) => checkbox.value
        );
        console.log(RecordIds);
    });
}
DeleteMultipleRecord();
