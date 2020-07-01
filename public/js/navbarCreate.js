$(function() {
    $('a').click(function() {
        $('a').removeClass('underline');
        $(this).addClass('underline');
    });
});