$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready( function() {

    // hide form edition (title etc)
    $('#surveyform').hide();

    // If click on modify form then show form edition
    $('#show-edit').click( function() {
        $('#survey_title').removeClass('is-invalid');
        $('#survey_title').next().children().html('');
        $('#show-edit').parent().hide();
        $('#surveyform').show();
    });

    // survey form submit
    $('#surveyform').submit( function(e) {
        let that = e.currentTarget;
        e.preventDefault();

        $.ajax({
            method: $(that).attr('method'),
            url: $(that).attr('action'),
            data: $(that).serialize()
        })
        .done((data) => {
            $('#show-edit').parent().show();
            $('#survey_title_text').text(data);
            $('#surveyform').hide();
        })
        .fail((data) => {
            if(data.status == 422) {
                $.each(data.responseJSON.errors, function (i, error) {
                    $('#surveyform')
                        .find('[name="' + i + '"]')
                        .addClass('is-invalid')
			.parent()
			.parent()
                        .next()
			.children()
                        .children()
                        .html(error[0]);
                });
            }
        });
    });

    $("#add-question").click(function(){

        $('#questions-container').append(
            '<div class="question container text-white p-2 my-3 shadow">'
        +   '<div class="row justify-content-md-center p-2">'
        +   '<div class="col col-lg">'
        +   '<span>'
        +   '<input type="text" class="form-control form-control-lg noborder p-2" name="question" value="" required>'
        +   '</span>'
        +   '</div>'
        +   '<div class="col-md-auto">'
        +   '<select name="select" class="custom-select col">'
        +   '<option class="simple" value="simple" selected>Question simple</option>'
        +   '<option class="paragraph" value="paragraph">Paragraphe</option>'
        +   '<option class="multiple" value="multiple">Choix multiple</option>'
        +   '<option class="checkbox" value="checkbox">Cases à cocher</option>'
        +   '<option class="number" value="number">Nombre</option>'
        +   '<option class="range" value="range">Echelle linéaire</option>'
        +   '<option class="date" value="date">Date</option>'
        +   '<!-- <option class="file" value="file">File</option> -->'
        +   '</select>'
        +   '</div>'
        +   '<div class="mt-1 p-1">'
        +   '<input type="checkbox" checked class="text-center" name="required" />'
        +   '</div>'
        +   '<div class="text-center p-2">'
        +   '<label>Requis</label>'
        +   '</div>'
        +   '<span class="pr-2">'
        +   ' <button type="button" class="delete-question btn btn-secondary mb-2 noborder">'
        +   '<i class="far fa-trash-alt"></i>'
        +   '</button>'
        +   '</span>'
        +   '</div>'
        +   '<span class="invalid-feedback" role="alert">'
        +   '<strong></strong>'
        +   '</span>'
        +   '</div>'); 
    });

    $(document).on("click", ".delete-question" , function() {
        $(this).parent().parent().parent().remove();
    });

    $(document).on("change", ".checkbox-edit", function() {
        if($(this).is(":checked")) {
            $(this).parent().parent().append(
                '<input class="e-question form-control col-4 form-control-lg noborder p-2" type="number" name="i-question" required>'
            +   '<span class="invalid-feedback" role="alert">'
            +   '<strong></strong>'
            +   '</span>'
            +   '<input class="e-question form-control col-4 form-control-lg noborder p-2" type="number" name="i-question" required>'
            +   '<span class="invalid-feedback" role="alert">'
            +   '<strong></strong>'
            +   '</span>');
        }
        else {
            $(this).parent().next().nextAll().remove();
        }
    });

    $(document).on("change", "select" , function() {
        switch($(this).val()) {
            case 'simple':
                $(this).parent().parent().next().nextAll().remove();
                break;
            case 'paragraph':
                $(this).parent().parent().next().nextAll().remove();
                break;
            case 'number':
                $(this).parent().parent().next().nextAll().remove();
                $(this).parent().parent().parent().append('<div class="e-container col-8 d-flex justify-content-center">'
                +   '<div class="mt-1 p-1"><input type="checkbox" name="c-question" class="e-question checkbox-edit "></div>'
                +   '<div class="text-center p-2"><label>Délimiter</label></div></div>');
                break;
            case 'range':
                $(this).parent().parent().next().nextAll().remove();
                $(this).parent().parent().parent().append('<div class="e-container col-8 d-flex justify-content-center">'
                +   '<div class="mt-1 p-1"><input type="checkbox" name="c-question" class="e-question checkbox-edit "></div>'
                +   '<div class="text-center p-2"><label>Délimiter</label></div></div>');
                break;
            case 'date':
                $(this).parent().parent().next().nextAll().remove();
                break;
            case 'file':
                $(this).parent().parent().next().nextAll().remove();
                break;
            case 'multiple':
                $(this).parent().parent().next().nextAll().remove();
                $(this).parent().parent().parent().append('<div class="e-container"><div class="p-2 ml-5 pl-2">'
                +   '<input type="text" name="e-question" required="required" class="e-question form-control col-4 form-control-lg noborder p-2">'
                +   '</div> <span role="alert" class="invalid-feedback"><strong></strong></span> <div class="p-2 ml-5 pl-2">'
                +   '<input type="text" name="e-question" required="required" class="e-question form-control col-4 form-control-lg noborder p-2">'
                +   '</div> <span role="alert" class="invalid-feedback"><strong></strong></span></div>'
                +   '<div class="col-sm-3 d-flex justify-content-end">'
                +   '<button type="button" class="add-e btn btnsurvey btn-danger noborder">'
                +   '<i class="fa fa-plus" aria-hidden="true"></i>'
                +   '</button>'
                +   '</div>');
                break;

            case 'checkbox':
                $(this).parent().parent().next().nextAll().remove();
                $(this).parent().parent().parent().append('<div class="e-container"><div class="p-2 ml-5 pl-2">'
                +   '<input type="text" name="e-question" required="required" class="e-question form-control col-4 form-control-lg noborder p-2">'
                +   '</div> <span role="alert" class="invalid-feedback"><strong></strong></span> <div class="p-2 ml-5 pl-2">'
                +   '<input type="text" name="e-question" required="required" class="e-question form-control col-4 form-control-lg noborder p-2">'
                +   '</div> <span role="alert" class="invalid-feedback"><strong></strong></span></div>'
                +   '<div class="col-sm-3 d-flex justify-content-end">'
                +   '<button type="button" class="add-e btn btnsurvey btn-danger noborder">'
                +   '<i class="fa fa-plus" aria-hidden="true"></i>'
                +   '</button>'
                +   '</div>');
                break;
            default:
                console.log('problem');
        }
    });


    $(document).on("click", ".add-e" , function() {
        if ($(this).parent().prev().find('input').length < 10) {
            $(this).parent().prev().append('<div class="p-2 ml-5 pl-2 d-flex justify-content-start">'
            +   '<input class="e-question form-control col-4 form-control-lg noborder p-2" type="text" name="e-question" required>'
            +   '<button type="button" class="del-e btn btnsurvey btn-danger noborder">'
            +   '<i class="fas fa-minus"></i></button></div><span class="invalid-feedback" role="alert">'
            +   '<strong></strong></span>');
            if ($(this).parent().prev().find('input').length == 10) {
                $(this).parent().remove();
            }
        }
    });

    $(document).on("click", ".del-e" , function() {
        $(this).parent().next().remove();
        if ($(this).parent().parent().find('input').length == 10) {
            $(this).parent().parent().parent().append('<div class="col-sm-3 d-flex justify-content-end">'
            +   '<button type="button" class="add-e btn btnsurvey btn-danger noborder">'
            +   '<i class="fa fa-plus" aria-hidden="true"></i></button></div>');
        }
        $(this).parent().remove();
    });


    // survey form submit
    $(document).on("submit", "#questionform" , function(e) {
        let that = e.currentTarget;
        e.preventDefault();

        // Delete questions
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'DELETE',
            url: $(that).attr('action') + '/' + $('#surveyid').val(),
        })
        .done( function() {
            $data = 'id=' + $('#surveyid').val();
            storequestions();
        })
        .fail((data) => {
            
        });
    });

    function storequestions() {
        // Add new ones
        var i = 0;
        var e = 0;
        var x = 0;
        var q = 0;
        var c = 0;

        $('.question').each( function() {
            $data = $data + '&select[' + x + ']=' + $(this).find('select').val();

            $data = $data + '&nbelement[' + x +']=' + $(this).find('.e-question').length;

            $(this).find('input').each( function() {
                if ($(this).attr('name') == 'question') {
                    $data = $data + '&question[' + q + ']=' + $(this).val();
                    q++;
                }
                else if ($(this).attr('name') == 'required') {
                    $data = $data + '&required[' + x + ']=' + $(this).prop('checked');
                }
                else if ($(this).attr('name') == 'e-question') {
                    $data = $data + '&equestion[' + e + ']=' + $(this).val();
                    e++;
                }
                else if ($(this).attr('name') == 'c-question') {
                    $data = $data + '&cquestion[' + c + ']=' + $(this).prop('checked');
                    c++;
                }
                else if ($(this).attr('name') == 'i-question') {
                    $data = $data + '&iquestion[' + i + ']=' + $(this).val();
                    i++;
                }
            });
           
            x++;

        });

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: $('#questionform').attr('method'),
            async: false,
            url: $('#questionform').attr('action'),
            data: $data
        })
        .done( function(data) {
            window.location.href = $('#surveyform').attr('action');
        })
        .fail((data) => {
            if(data.status == 422) {

                $('input').each( function() {
                    if($(this).hasClass('is-invalid')) {
                        $(this).removeClass('is-invalid')
                    }
                });

                $('.invalid-feedback').each( function() {
                    $(this).children().html('');
                });

                
                $.each(data.responseJSON.errors, function (i, error) {
                    y = i.split('.');
                    var z = 0;
                    var e = 0;
                    var x = 0;

                    $('.question').each( function() {

                        $(this).find('input').each( function() {
                            if ($(this).attr('name') == 'question') {
                                if (y[0] == 'question' && y[1] == x) {
                                    $(this).addClass('is-invalid')
                                    .parent()
                                    .parent()
                                    .parent()
                                    .next()
                                    .addClass('d-block')
                                    .children()
                                    .html(error[0]);
                                }
                                x++;
                            }
                            else if ($(this).attr('name') == 'e-question') {
                                if (y[0] == 'equestion' && y[1] == e) {
                                    $(this).addClass('is-invalid')
                                    .parent()
                                    .next()
                                    .addClass('d-block')
                                    .children()
                                    .html(error[0]);
                                }
                                e++;
                            }
                            else if ($(this).attr('name') == 'i-question') {
                                if (y[0] == 'iquestion' && y[1] == z) {
                                    $(this).addClass('is-invalid')
                                    .parent()
                                    .next()
                                    .addClass('d-block')
                                    .children()
                                    .html(error[0]);
                                }
                                z++;
                            }
                        });
                    });
                })
            }
            else {
                console.log(data);
            }
        });
    }
});