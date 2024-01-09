$(document).ready(function () {
    // Efek animasi saat mouse masuk ke footer
    $('.footer').mouseenter(function () {
        $(this).animate({ opacity: 4 }, 'fast');
    });

    // Efek animasi saat mouse keluar dari footer
    $('.footer').mouseleave(function () {
        $(this).animate({ opacity: 1 }, 'fast');
    });

});
