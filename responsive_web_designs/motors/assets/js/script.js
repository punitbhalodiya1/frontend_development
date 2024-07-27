jQuery(document).ready(function () {
    var $ = jQuery;
    if($(".slick-slider").length){
        $(".slick-slider").slick({
                draggable: true,
                autoplay: true,
                autoplaySpeed: 7000,
                arrows: false,
                dots: false,
                fade: true,
                speed: 500,
                infinite: true,
                cssEase: 'ease-in-out',
                touchThreshold: 100
            });
    }

    $('#ChangeToggle').click(function () {
        $('#navbar-hamburger').toggleClass('hidden');
        $('#navbar-close').toggleClass('hidden');
    });

    $('.stm_date_time_input input').on('change', function () {
        if ($(this).val() == '') {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });

    /*Timepicker*/
    var stmToday = new Date();
    var stmTomorrow = new Date(+new Date() + 86400000);
    moment.locale('en');
    var minDate = new Date();
    var startDate = false;
    var endDate = false;
    var dateTimeFormat = 'MM/DD/Y H:mm';
    var wpTimeFormat = 'H:i';
    var dateTimeFormatHide = 'MM DD, YYYY HH:mm';
    var datepicker_holder = $('.stm-date-timepicker-holder');

    datepicker_holder.daterangepicker({
        minDate: minDate,
        minHour: 9,
        maxHour: 18,
        startDate: stmToday,
        endDate: stmTomorrow,
        timePicker: true,
        timePicker24Hour: true,
        timePickerIncrement: 30,
        autoApply: true,
        locale: {
            format: dateTimeFormat,
            firstDay: 1
        },
        opens: 'center'
    });

    datepicker_holder.on('show.daterangepicker', function (ev, picker) {
        $('body').addClass('stm_background_overlay stm-lock');
    })

    datepicker_holder.on('hide.daterangepicker', function (ev, picker) {

        startDate = picker.startDate.format(dateTimeFormatHide);
        endDate = picker.endDate.format(dateTimeFormatHide);

        $('.stm-date-timepicker-start').attr('data-dt-hide', picker.startDate.format(startDate));

        $('.stm-date-timepicker-end').attr('data-dt-hide', picker.endDate.format(endDate));

        if (dateTimeFormat.startsWith('F j, Y')) {
            wpTimeFormat = wpTimeFormat.replace(/g/g, 'h').replace(/i/g, 'mm');
            $('.stm-date-timepicker-start').val(picker.startDate.format('MMMM D, YYYY' + ' ' + wpTimeFormat));
            $('#pickup-date-holder').text(picker.startDate.format('MMMM D, YYYY' + ' ' + wpTimeFormat));
            $('.stm-date-timepicker-end').val(picker.endDate.format('MMMM D, YYYY' + ' ' + wpTimeFormat));
            $('#return-date-holder').text(picker.endDate.format('MMMM D, YYYY' + ' ' + wpTimeFormat));
        } else {
            $('.stm-date-timepicker-start').val(picker.startDate.format(dateTimeFormat));
            $('#pickup-date-holder').text(picker.startDate.format(dateTimeFormat));

            $('.stm-date-timepicker-end').val(picker.endDate.format(dateTimeFormat));
            $('#return-date-holder').text(picker.endDate.format(dateTimeFormat));

        }
    })

});