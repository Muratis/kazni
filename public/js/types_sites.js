$(document).ready(function() {
    $('.hid_lp').hide();
    $('#show_moreInfo').on("click", function () {
        if ($('.lp-content ').hasClass('hid_lp')) {
            $('.lp-content ').removeClass('hid_lp').show('slide', 700).addClass('show_lp');
            $('#show_moreInfo').html('Скрыть');
        } else {
            $('.lp-content ').removeClass('show_lp').hide('slide', 500).addClass('hid_lp');
            $('#show_moreInfo').html('Узнать больше');
        }
    });

})