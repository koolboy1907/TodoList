<?php include_once("partials/header.php");?>
<div class="content">
  <div class="container">
    <h2>TODOLIST - TOPIC TEST IN EST ROUGE COMPANY</h2>
    <div class="btn-groups">
      <a href="/?action=add" class="btn btn-inline btn-success">Add New Work</button></a>
      <a href="/?action=calendar" class="btn btn-inline btn-warning">View Calendar</button></a>
    </div>
    <table id="table-list" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th width="1">
          #
        </th>
        <th>Work Name</th>
        <th>Starting Date</th>
        <th>Ending Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $stt = 1;
      foreach ($works as $work){ ?>
        <tr>
          <td><?= $stt; ?></td>
          <td><?= $work['name'];?></td>
          <td><?= $work['start_date'];?></td>
          <td><?= $work['end_date'];?></td>
          <td><?= $work['status'];?></td>
          <td>
            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
              <div class="btn-group btn-group-sm" style="float: none;">
                <a href="/?action=edit&id=<?= $work['id']; ?>" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></a>
                <a onclick="return confirm('Are you sure you want to delete this work?')" href="/?action=delete&id=<?= $work['id']; ?>" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></a>
              </div>
            </div>
          </td>
        </tr>
        <?php
        $stt++;
      }
      ?>
      </tbody>
    </table>
  </div><!--.container-->
</div><!--.page-content-->
<?php include_once("partials/footer.php");?>