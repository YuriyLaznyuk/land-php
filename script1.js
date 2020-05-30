document.getElementById('label-click').addEventListener('click'
, function () {
    setTimeout(function () {
        document.getElementById('ulnavi').classList.toggle('responce');
    },500);
        // document.getElementById('ulnavi').classList.toggle('responce');
    });

// portfolio


$('.portfolio-btn button').click(function () {
    var get_id = this.id;
    var get_current = $('.portfolio-foto .' + get_id);
    $('.foto').not(get_current).hide(500);
    get_current.show(500);
});
$('#show').click(function () {
    $('.foto').show(500);
});

// slider
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({items:8});
});

if($(window).width() < 420){
    $(".owl-carousel").owlCarousel({items:3});
}