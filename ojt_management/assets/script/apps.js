$(document).ready(() => {

    $('.sidebar-menu-item').click(function() {
        $('.sidebar-menu-item').removeClass('active');
        $(this).addClass('active');

        var content_id = $(this).attr('data-content');

        $('.content').removeClass('active');
        $('#' + content_id).addClass('active');
    });


    // student link
    $('.sidebar-menu-item.student').click(function() {
        $('.student_menu').addClass('active');
        $('.student_menu').css({display: 'grid'})
        
    });

    $('#menu-icon').click(function() {
        $('.container').toggleClass('active');
        $('.sidebar-menu-item p').toggleClass('hide');
        $('.container .sidebar').toggleClass('active');
        $('.sidebar-header .title').toggleClass('active');
        $('#menu-icon').toggleClass('active');
    });


    $(".user").click(function() {
        $(".profile-div").toggle(1000);
    });
    $(".bell").click(function() {
        $(".notification-div").toggle(1000);
    });


    $('.change_pass').keyup(function(){
        if($(this).val()){
        $('.save-password').show();
    }else{
        $('.save-password').hide();
    }
    })
   

    
});