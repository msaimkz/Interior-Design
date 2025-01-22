
function toggleCheckbox() {

    $('.setting-right-content-checkbox').click(function(){
        $('.setting-right-content-checkbox').toggleClass('active')
    })
}


toggleCheckbox()


function Tab() {

   

    const buttons = document.querySelectorAll('.setting-tab'); 

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            const id = $(this).data('toggle'); 
            if(id == "AccountSecurity"){

                $('#AccountSetting').removeClass('active');

                $(buttons[0]).removeClass('active')
                $(this).addClass('active');
                $(`#${id}`).addClass('active');



            }
            else{
                $('#AccountSecurity').removeClass('active');

                $(buttons[1]).removeClass('active')
                $(this).addClass('active');
                $(`#${id}`).addClass('active');


            }
        });
    });
    
}

Tab();