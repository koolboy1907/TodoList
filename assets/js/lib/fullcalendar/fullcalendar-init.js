$(document).ready(function(){

    /* ==========================================================================
        Fullcalendar
        ========================================================================== */
    today = formatDate(new Date());
    var arrayWork = [];
    $.each(worksJson, function(key, value) {
      arrayWork.push({
        title: value['name'],
        start: value['start_date'],
        end: value['end_date'],
        status: value['status'],
      });
    });
    $('#calendar').fullCalendar({
        header: {
            left: '',
            center: 'prev, title, next',
            right: 'today agendaDay,agendaTwoDay,agendaWeek,month'
        },
        buttonIcons: {
            prev: 'font-icon font-icon-arrow-left',
            next: 'font-icon font-icon-arrow-right',
            prevYear: 'font-icon font-icon-arrow-left',
            nextYear: 'font-icon font-icon-arrow-right'
        },
        defaultDate: today,
        editable: true,
        selectable: true,
        eventLimit: true, // allow "more" link when too many events
        events: arrayWork,
        viewRender: function(view, element) {
            // При переключении вида инициализируем нестандартный скролл
            if (!("ontouchstart" in document.documentElement)) {
                $('.fc-scroller').jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
            }

            $('.fc-popover.click').remove();
        },
        eventClick: function(calEvent, jsEvent, view) {

            var eventEl = $(this);

            // Add and remove event border class
            if (!$(this).hasClass('event-clicked')) {
                $('.fc-event').removeClass('event-clicked');

                $(this).addClass('event-clicked');
            }

            // Add popover
            $('body').append(
              '<div class="fc-popover click">' +
              '<div class="fc-header">' +
              moment(calEvent.start).format('dddd • D') +
              '<button type="button" class="cl"><i class="font-icon-close-2"></i></button>' +
              '</div>' +

              '<div class="fc-body main-screen">' +
              '<p>' +
              moment(calEvent.start).format('dddd, D YYYY, hh:mma') +
              '</p>' +
              '<p class="color-blue-grey">Status: ' + calEvent.status + '</p>' +
              '</div>' +
              '</div>'
            );

            // Position popover
            function posPopover(){
                $('.fc-popover.click').css({
                    left: eventEl.offset().left + eventEl.outerWidth()/2,
                    top: eventEl.offset().top + eventEl.outerHeight()
                });
            }

            posPopover();

            $('.fc-scroller, .calendar-page-content, body').scroll(function(){
                posPopover();
            });

            $(window).resize(function(){
                posPopover();
            });


            // Remove old popover
            if ($('.fc-popover.click').length > 1) {
                for (var i = 0; i < ($('.fc-popover.click').length - 1); i++) {
                    $('.fc-popover.click').eq(i).remove();
                }
            }

            // Close buttons
            $('.fc-popover.click .cl, .fc-popover.click .remove-popover').click(function(){
                $('.fc-popover.click').remove();
                $('.fc-event').removeClass('event-clicked');
            });

            // Actions link
            $('.fc-event-action-edit').click(function(e){
                e.preventDefault();

                $('.fc-popover.click .main-screen').hide();
                $('.fc-popover.click .edit-event').show();
            });

            $('.fc-event-action-remove').click(function(e){
                e.preventDefault();

                $('.fc-popover.click .main-screen').hide();
                $('.fc-popover.click .remove-confirm').show();
            });
        }
    });


    /* ==========================================================================
        Side datepicker
        ========================================================================== */

    // $('#side-datetimepicker').flatpickr({
    //     inline: true,
    //     format: 'DD/MM/YYYY'
    // });
});

function formatDate(date) {
    var d = new Date(date),
      month = '' + (d.getMonth() + 1),
      day = '' + d.getDate(),
      year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}


/* ==========================================================================
    Calendar page grid
    ========================================================================== */

// (function($, viewport){
//     $(document).ready(function() {
//
//         if(viewport.is('>=lg')) {
//             $('.calendar-page-content, .calendar-page-side').matchHeight();
//         }
//
//         // Execute code each time window size changes
//         $(window).resize(
//           viewport.changed(function() {
//               if(viewport.is('<lg')) {
//                   $('.calendar-page-content, .calendar-page-side').matchHeight({ remove: true });
//               }
//           })
//         );
//     });
// })(jQuery, ResponsiveBootstrapToolkit);



