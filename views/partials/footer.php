<script src="assets/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>

<script type="text/javascript" src="assets/js/lib/moment/moment-with-locales.min.js"></script>
<script type="text/javascript" src="assets/js/lib/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/lib/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="assets/js/lib/clockpicker/bootstrap-clockpicker-init.js"></script>
<script src="assets/js/lib/daterangepicker/daterangepicker.js"></script>
<script src="assets/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/js/lib/html5-form-validation/jquery.validation.min.js"></script>
<script>
  $(function() {

    $('#start-date').flatpickr({
      minDate: "today"
    });

    $('#end-date').flatpickr({
      minDate: "today",
    });

    $('.form').validate({
      submit: {
        settings: {
          inputContainer: '.form-group'
        }
      }
    });

  });
</script>
<script src="assets/js/app.js"></script>
</body>
</html>