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

let isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};


// проверка на мобилки
let body = document.querySelector('body');
if (isMobile.any()) {
    body.classList.add('touch');
    let arrow = document.querySelectorAll('.arrow');
    for (i = 0; i < arrow.length; i++) {
        let thisLink = arrow[i].previousElementSibling;
        let subMenu = arrow[i].nextElementSibling;
        let thisArrow = arrow[i];
        thisLink.classList.add('parent');
        arrow[i].addEventListener('click', function () {
            subMenu.classList.toggle('open');
            thisArrow.classList.toggle('active');
        });
    }
} else {
    body.classList.add('mouse');
}