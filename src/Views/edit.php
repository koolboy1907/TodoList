<?php include_once("partials/header.php"); ?>
<div class="content">
  <div class="container">
    <h2>TODOLIST - TOPIC TEST IN EST ROUGE COMPANY</h2>
    <h4>EDIT WORK</h4>
    <form id="edit-work" class="form" name="edit-work" action="" method="POST">
      <fieldset class="form-group">
        <label class="form-label">Work Name</label>
        <input name="name" type="text" class="form-control" value="<?= $work['name'];?>" required>
      </fieldset>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label">Starting Date</label>
          <input id="start-date" class="flatpickr form-control" name="start_date" type="text" placeholder="Select date..." value="<?= $work['start_date'];?>" required>
        </div>
        <div class="form-group col-md-6">
          <label class="form-label">Ending Date</label>
          <input id="end-date" class="flatpickr form-control" name="end_date" type="text" placeholder="Select date..." value="<?= $work['end_date'];?>" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status">
            <!-- <option value="">Select</option> -->
            <?php foreach ($arrStatus as $status) {?>
              <?php $seledted = ($status == $work['status']) ? 'selected' : ''; ?>
              <option value="<?= $status?>" <?= $seledted ?>><?= $status; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <fieldset class="form-group">
        <input type="submit" class="btn" name="submit" value="Save">
      </fieldset>
    </form>
  </div>
</div>
<?php include_once("partials/footer.php"); ?>
