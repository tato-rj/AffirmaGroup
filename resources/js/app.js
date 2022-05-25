require('./bootstrap');

$('.hamburger').click(function() {
    $(this).toggleClass('is-active');
});

var $menu = $('nav.navbar');
var headH = $('#home').height()/4;

$(window).scroll(function() {
    let scrollTop = $(this).scrollTop();
    console.log(headH);
    
    if (scrollTop > headH) {
        $menu.addClass('navbar-moved');
        $menu.removeClass('navbar-parked');
    } else {
        $menu.addClass('navbar-parked');
        $menu.removeClass('navbar-moved');
    }
});

$('[check-target]').click(function() {
    let $checkbox = $('#'+$(this).attr('check-target'));
    $checkbox.prop('checked', !$checkbox.is(':checked'));
});