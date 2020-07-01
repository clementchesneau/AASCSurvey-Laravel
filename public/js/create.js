$(document).ready( function() {

    $('#firsthidden').hide();

    $(document).on("click", "#create-nav-link1", function(e) {
        e.preventDefault;
        $('#firsthidden').hide();
        $('#firsthidden').prev().show();
    });

    $(document).on("click", "#create-nav-link2", function(e) {
        e.preventDefault;
        $('#firsthidden').show();
        $('#firsthidden').prev().hide();
    })
});
