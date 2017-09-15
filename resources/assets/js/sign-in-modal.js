$('.menu-open-btn').on('click', function(){
    event.preventDefault();
    $('body').addClass('is-menu-open');
    return false;
});

$('.menu-close-btn').on('click', function(){
    event.preventDefault();
    $('body').removeClass('is-menu-open');
    return false;
});