$(document).ready(function () {
    var myInput = $('#password'),
    myIcon = $('#icon');
    if(myIcon.length > 0){
        myIcon.onclick = function () {
            if (myIcon.classList.contains('fa-eye')) {
                this.classList.toggle('fa-eye-slash');
                this.classList.toggle('fa-eye');
                myInput.setAttribute('type', 'text');
            } else {
                myInput.setAttribute('type', 'password');
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            };
        }
    }  

    if($('#example').length){
        $('#example').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc'],[6, 'desc']],
        });    
    }
    
    if($('#example1').length){
        $('#example1').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc'],[6, 'desc'],[7, 'desc']],
        });
    }

    if($('#example2').length){
        $('#example2').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc']],
        });
    }
    // $('#example3').DataTable({
    //     order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc'],[6, 'desc']]
    // });

    if($('#example3').length){
        $('#example3 thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#example3 thead');
     
        var table = $('#example3').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc'],[6, 'desc']],
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
     
                // For each column
                api
                    .columns(":lt(7)")
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<div class="input-box-mained"><input type="text" placeholder="'+title.trim()+'" /></div>');
     
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();
     
                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();
     
                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },
        });
    }

    if($('#example4').length){
        $('#example4 thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#example4 thead');
     
        var table = $('#example4').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc'],[6, 'desc'], [7, 'desc']],
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
     
                // For each column
                api
                    .columns(":lt(8)")
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<div class="input-box-mained"><input type="text" placeholder="'+title.trim()+'" /></div>');
     
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();
     
                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();
     
                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },
        });
    }

    
    if($('#soidukid').length){
        $('#soidukid thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#soidukid thead');
     
        var table = $('#soidukid').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc']],
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
     
                // For each column
                api
                    .columns(":lt(5)")
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<div class="input-box-mained"><input type="text" placeholder="'+title.trim()+'" /></div>');
     
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();
     
                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();
     
                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },
        });
    }

    if($('#kliendid').length){
        $('#kliendid thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#kliendid thead');
     
        var table = $('#kliendid').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc']],
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
     
                // For each column
                api
                    .columns(":lt(6)")
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<div class="input-box-mained"><input type="text" placeholder="'+title.trim()+'" /></div>');
     
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();
     
                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();
     
                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },
        });
    }

    if($('#pakkumised').length){
        $('#pakkumised thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#pakkumised thead');
     
        var table = $('#pakkumised').DataTable({
            order: [[0, 'desc'],[1, 'desc'],[2, 'desc'],[3, 'desc'],[4, 'desc'],[5, 'desc'],[6, 'desc'], [7, 'desc']],
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
     
                // For each column
                api
                    .columns(":lt(8)")
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<div class="input-box-mained"><input type="text" placeholder="'+title.trim()+'" /></div>');
     
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();
     
                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();
     
                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
            },
        });
    }
});