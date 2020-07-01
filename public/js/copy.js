$(document).ready( function() {
    var i = 0;

    $('div').each( function() {
        if ($(this).attr('id') == 'modallink') {
            $(this).attr('id', 'modallink' + i);
            i ++;
        }
        else if ($(this).attr('id') == 'vraimentsupprimer') {
            $(this).attr('id', 'vraimentsupprimer' + i);
        }
    });

    var b = 0;
    $('button').each( function() {
        if ($(this).attr('data-target') == '#vraimentsupprimer') {
            $(this).attr('data-target', '#vraimentsupprimer' + b);
            b++;
        }
    });

    var c = 0;
    $('a').each( function() {
        if ($(this).attr('data-target') == '#modallink') {
            $(this).attr('data-target', '#modallink' + c);
            c++;
        }
    });
});


function copyclipboard(e) {

    e = e || window.event;
    var targ = e.target || e.srcElement || e;
    if (targ.nodeType == 3) targ = targ.parentNode; // defeat Safari bug
    
    var toCopy = $(targ).prev();

    /* Select the text field */
    toCopy.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied the text");
}

