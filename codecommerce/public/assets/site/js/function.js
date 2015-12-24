


$(document).ready(function () {

    $('#texto').cycle({
        fx: 'scrollLeft',
        pause: 1,
        prev: '.prev',
        next: '.next'

    });
});


$('.slide_nav.go').click(function () {
    slideGo();

});

function slideGo() {

    if ($('.slide_item.first').next().size()) {
        $('.slide_item.first').fadeOut(400, function () {
            $(this).removeClass('first').next().fadeIn().addClass('first');


        });

    }


}