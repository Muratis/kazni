
$(document).ready(function(){

    $("#carousel").carousel();
    $("#carousel_portfolio").carousel();

    $(".welcome").hide();
    $(".social").hide();

    $(".welcome").show("fade", 3000);
    $(".social").show("fade", 3000);

    // var sideslider = $('[data-toggle=collapse-side]');
    // var sel = sideslider.attr('data-target');
    // var sel2 = sideslider.attr('data-target-2');
    // sideslider.click(function(event){
    //     $(sel).toggleClass('in');
    //     $(sel2).toggleClass('out');
    // });

        $(".scroll-js[href*=#]").on("click", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор блока с атрибута href
            var id  = $(this).attr('href').slice(1),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 1000);
        });

    $('.hid').hide();

    $('#allTypes').on("click", function () {
        if ($('#allType').hasClass('hid')) {
            $('#allType').removeClass('hid').show('fade',500).addClass('showAll');
            $('#allTypes').html('Скрыть');
        } else {
            $('#allType').removeClass('showAll').hide('fade',500).addClass('hid');
            $('#allTypes').html('Показать все типы сайтов');
        }
    });

    
    

})