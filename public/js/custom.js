$('.dropbtn').click( function() {
    $('.dropdown_list').toggle();
    $(".dropdown_list").css({    
        display: block,
         background:#454251;
    }); 
    return false;
});