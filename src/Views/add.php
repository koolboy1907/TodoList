<?php include_once("partials/header.php"); ?>
<div class="content">
  <div class="container">
    <h2>TODOLIST - TOPIC TEST IN EST ROUGE COMPANY</h2>
    <h4>ADD NEW WORK</h4>
    <form id="add-new-work" class="form" action="" method="POST">
      <fieldset class="form-group">
        <label class="form-label">Work Name</label>
        <input type="text" class="form-control" name="name" placeholder="Test Topic EST ROUGE" required>
      </fieldset>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label">Starting Date</label>
          <input id="start-date" class="flatpickr form-control" name="start_date" type="text" placeholder="Select date..." required>
        </div>
        <div class="form-group col-md-6">
          <label class="form-label">Ending Date</label>
          <input id="end-date" class="flatpickr form-control" name="end_date" type="text" placeholder="Select date..." required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status">
            <!-- <option value="">Select</option> -->
            <?php foreach ($arrStatus as $status) {?>
              <option value="<?= $status?>"><?= $status; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <fieldset class="form-group">
        <input type="submit" class="btn btn-inline" name="submit" value="Add">
        <a href="/?action=list" class="btn btn-inline btn-success">List Work</a>
        <a href="?action=calendar" class="btn btn-inline btn-warning">View Calender</a>
      </fieldset>
    </form>
  </div>
</div>
<?php include_once("partials/footer.php"); ?>
