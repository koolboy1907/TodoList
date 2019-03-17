$(document).ready(function(){
  $('#start-date').flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minDate: "today"
  });

  $('#end-date').flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
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
