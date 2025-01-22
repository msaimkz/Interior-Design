
function Tab() {

   

    const buttons = document.querySelectorAll('.tab-button'); 

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            const id = $(this).data('toggle'); 
            if(id == "EditProfileTab"){

                $('#AboutProfileTab').removeClass('active');

                $(buttons[0]).removeClass('active')
                $(this).addClass('active');
                $(`#${id}`).addClass('active');



            }
            else{
                $('#EditProfileTab').removeClass('active');

                $(buttons[1]).removeClass('active')
                $(this).addClass('active');
                $(`#${id}`).addClass('active');


            }
        });
    });
    
}

Tab();