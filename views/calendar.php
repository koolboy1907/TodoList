<?php include_once("partials/header.php");?>
<div class="content">
  <div class="container">
    <h2>TODOLIST - TOPIC TEST IN EST ROUGE COMPANY</h2>
    <h4>CALENDAR</h4>
    <div class="btn-group">
      <a href="/?action=add" class="btn btn-inline btn-success">Add New Work</a>
      <a href="/?action=list" class="btn btn-inline btn-warning">List Work</a>
    </div>
    <div id="calendar"></div>
  </div><!--.container-->
</div><!--.page-content-->

<script src="assets/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>

<script>  var worksJson = <?= json_encode($workCalendar); ?>;</script>
<script type="text/javascript" src="assets/js/lib/moment/moment-with-locales.min.js"></script>
<script type="text/javascript" src="assets/js/lib/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/lib/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/js/lib/fullcalendar/fullcalendar-init.js"></script>
</body>
</html>