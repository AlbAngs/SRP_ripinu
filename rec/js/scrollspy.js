$('.nav li a').on('click', function() {
    alert('clicked');
    $(this).parent().parent().find('.active').removeClass('active');
    $(this).parent().addClass('active');
});