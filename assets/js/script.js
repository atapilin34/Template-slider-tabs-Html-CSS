$('.slick-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: false,
    touchMove: false,
    adaptiveHeight: true,
    infinite: true,
    slidesToShow: 1,
    prevArrow: $('.prev'),
    nextArrow: $('.next')
});

$('.footer__item_slider').slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
});


$( function() {
    $( "#tabs" ).tabs({
        active: 1
    });
} );

function getFormData(btnSelector) {
    console.log($(btnSelector));
    $(btnSelector).bind('click', function (){
        let name = $("#username").val(),
            pass = $("#password").val(),
            mail = $("#email").val();
        console.log('ajax:'+name+' '+pass);
        $.ajax({
            url: "server.php",
            type: "POST",
            data: ({name:name,pass:pass,mail:mail}),
            dataType:"html",
            beforeSend: beforeFunc,
            success: sendFormData
        });
    });
}

function beforeFunc() {
 console.log('Before');
}

function sendFormData() {
console.log('Data send success')
}

$(document).ready(function (){
    getFormData('#login-btn');
});


