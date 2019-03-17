<script src="assets/js/lib/jquery/jquery-3.2.1.min.js"></script>
<!--<script src="assets/js/lib/popper/popper.min.js"></script>-->
<!--<script src="assets/js/lib/tether/tether.min.js"></script>-->
<script src="assets/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>

<script type="text/javascript" src="assets/js/lib/moment/moment-with-locales.min.js"></script>
<script type="text/javascript" src="assets/js/lib/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/lib/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="assets/js/lib/clockpicker/bootstrap-clockpicker-init.js"></script>
<!--<script type="text/javascript" src="assets/js/lib/match-height/jquery.matchHeight.min.js"></script>-->
<!--<script type="text/javascript" src="assets/js/lib/moment/moment-with-locales.min.js"></script>-->
<!--<script src="assets/js/lib/daterangepicker/daterangepicker.js"></script>-->
<!--<script src="assets/js/lib/bootstrap-select/bootstrap-select.min.js"></script>-->
<!--<script src="assets/js/lib/html5-form-validation/jquery.validation.min.js"></script>-->
<script src="assets/js/lib/jquery-validation/jquery.validate.min.js"></script>
<script>
  $(function() {

    $('#start-date').flatpickr({
      minDate: "today"
    });

    $('#end-date').flatpickr({
      minDate: "today",
    });

    $('.form').validate({
      messages: {
        name: "Work name must not be empty.",
        start_date: "Starting date must not be empty.",
        end_date: "Ending date must not be empty."
      }
    });
  });
</script>
<script>
  var worksJson = <?= json_encode($workCalendar); ?>;
</script>
<script src="assets/js/lib/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/js/lib/fullcalendar/fullcalendar-init.js"></script>
<!--<script src="assets/js/app.js"></script>-->
</body>
</html>