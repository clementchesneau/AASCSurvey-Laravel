function answersubmit(){
    var doNoSend = false;
    var checkbox = false;
    

    $('.e-container').each( function() {
        var i = 0;
        
        $(this).find('input').each( function() {
            if ($(this).attr('type') == 'checkbox'){
                checkbox = true;
                if (this.checked) {
                    i++;
                }
            }
        });

        if (i == 0 && $(this).parent().find('.isrequired').val() == '1' && checkbox) {
            doNoSend = true;
        }
    });
      
    if (doNoSend) {
        return false;
    }
    else {
        return true;
    }
    
}


$(document).ready( function() {
    $('#firsthidden').hide();

    $(document).on("click", "#create-nav-link1", function(e) {
        e.preventDefault();
        $('#firsthidden').hide();
        $('#firsthidden').prev().show();
    });

    $(document).on("click", "#create-nav-link2", function(e) {
        e.preventDefault();
        $('#firsthidden').show();
        $('#firsthidden').prev().hide();
    });


    $(document).on("click", ".showanswers", function(e) {
        e.preventDefault();
        e.stopPropagation()
        $(this).parent().next().toggle();
    });

    var i = 0;
    var e = 0;
    var x = 0;
    var n = 0;

    $('.question').each( function() {
        var v = 0;

        $(this).attr('id', 'question' + i + 'container');
        $(this).find('input').each( function() {
            if (($(this).attr('type') != 'hidden' || $(this).val() == '-element-question-') && $(this).attr('name') != 'element') {
                $(this).attr('name', 'answer[' + i + ']');
            }
            else {
                if ($(this).attr('name') == 'questionid') {
                    $(this).attr('name', 'question[' + i + ']');
                }
                else if ($(this).attr('name') == 'isrequired') {
                    $(this).attr('name', 'isrequired[' + i + ']');
                }
                else if ($(this).attr('name') == 'nbelement') {
                    $(this).attr('name', 'nbelement[' + i + ']');
                }
                else if ($(this).attr('name') == 'questiontype') {
                    $(this).attr('name', 'questiontype[' + i + ']');
                }
            }

            if ($(this).parent().parent().hasClass('e-container')) {
                $(this).attr('id', 'element[' + e + ']');
                if ($(this).attr('name') == 'element') {
                    $(this).attr('name', 'element[' + x + ']');
                    x++;
                    v++;
                }
                e++;
            }
        });

        $(this).find('.nbelement').val(v);

        $(this).find('label').each( function() {
            $(this).attr('for', $(this).prev().attr('id'));
        });

        $(this).find('textarea').each( function() { 
            $(this).attr('name', 'answer[' + i + ']');
        });
        i++;
    });

    var multiple = 0;
    var checkbox = 0;
    var number = 0;
    var range = 0;

    var multiplectx = [];
    var checkboxctx = [];
    var numberctx = [];
    var rangectx = [];

    var multiplechart = [];
    var checkboxchart = [];
    var numberchart = [];
    var rangechart = [];

    $('.answer').find('canvas').each( function() {
        if ($(this).attr('id') == 'chartmultiple') {
            $(this).attr('id', 'chartmultiple[' + multiple +']');
            multiplectx[multiple] = this;
            multiple++;
        }
        else if ($(this).attr('id') == 'chartcheckbox') {
            $(this).attr('id', 'chartcheckbox[' + checkbox +']');
            checkboxctx[checkbox] = this;
            checkbox++;
        }
        else if ($(this).attr('id') == 'chartnumber') {
            $(this).attr('id', 'chartnumber[' + number +']');
            numberctx[number] = this;
            number++;
        }
        else if ($(this).attr('id') == 'chartrange') {
            $(this).attr('id', 'chartrange[' + range +']');
            rangectx[range] = this;
            range++;
        }
    });

    $('.answer').find('div').each( function() {
        if ($(this).attr('id') == 'answercontent') {
            $(this).attr('id', 'answercontent' + n);
            n++;
        }

        $(this).hide();
    });

    $.each(multiplectx, function(i, value) {
        multiplechart.push(new Chart(value, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: [],
                    data: [],
                    borderWidth: 3,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgb(0,128,0)',
                        'rgb(255,255,0)',
                        'rgb(105,105,105)',
                        'rgb(255,140,0)',
                        'rgb(220,20,60)',
                    ],
                    borderColor: '#313131'
                }]
            }
        }));
    });

    $.each(checkboxctx, function(i, value) {
        checkboxchart.push(new Chart(value, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: [],
                    data: [],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgb(0,128,0)',
                        'rgb(255,255,0)',
                        'rgb(105,105,105)',
                        'rgb(255,140,0)',
                        'rgb(220,20,60)',
                    ],
                }]
            },
            options: {
                scales: {
                    xAxes: [],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        }));
    });

    $.each(numberctx, function(i, value) {
        numberchart.push(new Chart(value, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: [],
                    data: [],
                    fill: false,
                    borderWidth: 1,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgb(0,128,0)',
                        'rgb(255,255,0)',
                        'rgb(105,105,105)',
                        'rgb(255,140,0)',
                        'rgb(220,20,60)',
                    ],
                }]
            },
            options: {
                scales: {
                    xAxes: [],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        }));
    });

    $.each(rangectx, function(i, value) {
        rangechart.push(new Chart(value, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: [],
                    data: [],
                    fill: false,
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgb(0,128,0)',
                        'rgb(255,255,0)',
                        'rgb(105,105,105)',
                        'rgb(255,140,0)',
                        'rgb(220,20,60)',
                    ],
                    borderColor: 'rgba(54, 162, 235, 1)'
                }]
            },
            options: {
                scales: {
                    xAxes: [],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        }));
    });

    var updateChart = function() {
        var chartroute = $('#chartroute').html();
        var m = multiple - 1;
        var c = checkbox - 1;
        var n = number - 1;
        var r = range - 1;
        
        $.ajax({
            url: chartroute,
            method: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
		
                if (data.answer_sheets.length == 0) {
                    $('#answersnumber').html('Aucune réponse');
                }
                else if (data.answer_sheets.length == 1) {
                    $('#answersnumber').html('Une réponse');
                }
                else {
                    $('#answersnumber').html(data.answer_sheets.length + ' réponses');
                }

                var x = 0;

                $.each( data.questions, function( index, value ){
                    if (value.type == 'simple' || value.type == 'paragraph' || value.type == 'date') {
                        x++;
                    }
                });

                x--;

                $.each( data.questions, function( index, value ){

                    if (value.type == 'multiple') {
                        multiplelabels = [];
                        multipledata = [];

                        $.each( data.elements, function( index2, value2 ){
                            if (value2.question_id == value.id && multiplelabels.indexOf(value2.content) == -1) {
                                multiplelabels.push(value2.content);
                                multipledata.push(0);
                            }
                        });

                        $.each( data.answers, function( index2, value2 ){
                            if (value2.question_id == value.id) {
                                $.each( multiplelabels, function( index3, value3 ) {
                                    if (value2.content == value3) {
                                        multipledata[index3] += 1;
                                    }
                                });
                            }
                        });

                        if (multiplelabels.length > 0) {
                            multiplechart[m].data.labels = multiplelabels;
                            multiplechart[m].data.datasets[0].data = multipledata;
                            multiplechart[m].update();
                            m--;
                        }

                    }

                    else if (value.type == 'checkbox') {
                        checkboxlabels = [];
                        checkboxdata = [];

                        $.each( data.elements, function( index2, value2 ){
                            if (value2.question_id == value.id && checkboxlabels.indexOf(value2.content) == -1) {
                                checkboxlabels.push(value2.content);
                                checkboxdata.push(0);
                            }
                        });

                        $.each( data.answers, function( index2, value2 ){
                            if (value2.question_id == value.id) {
                                var element = value2.content.split(',');
                                $.each( element, function( index3, value3 ){
                                    $.each( checkboxlabels, function( index4, value4 ) {
                                        if (value3 == value4) {
                                            checkboxdata[index4] += 1;
                                        }
                                    });
                                });
                            }
                        });

                        if (checkboxlabels.length > 0) {
                            checkboxchart[c].data.labels = checkboxlabels;
                            checkboxchart[c].data.datasets[0].data = checkboxdata;
                            checkboxchart[c].update();
                            c--;
                        }

                    }

                    else if (value.type == 'number' ||  value.type == 'range') {
                        numberlabels = [];
                        numberdata = [];

                        $.each( data.answers, function( index2, value2 ){
                            if (value2.question_id == value.id) {
                                if (numberlabels.indexOf(parseInt(value2.content)) == -1) {
                                    numberlabels.push(parseInt(value2.content));
                                    numberdata.push(0);
                                }
                                $.each( numberlabels, function( index3, value3 ) {
                                    if (parseInt(value2.content) == value3) {
                                        numberdata[index3] += 1;
                                    }
                                });
                            }
                        });

                        if (value.type == 'number' && numberlabels.length > 0) {
                            numberchart[n].data.labels = numberlabels;
                            numberchart[n].data.datasets[0].data = numberdata;
                            numberchart[n].update();
                            n--;
                        }
                        else if (numberlabels.length > 0) {
                            rangechart[r].data.labels = numberlabels;
                            rangechart[r].data.datasets[0].data = numberdata;
                            rangechart[r].update();
                            r--;
                        }

                    }

                    else {
                        $('#answercontent' + x).html('');
                        $.each( data.answers, function( index2, value2 ){
                            if (value2.question_id == value.id) {
                                $('#answercontent' + x).append('<p class="text-white">' + value2.content + '</p>');
                            }
                        });
                        x--;
                    }
                });
            },
            error: function(data){
                console.log(data);
            }
        });
    }
    

    updateChart();
    setInterval(() => {
        updateChart();
    }, 1000);

});