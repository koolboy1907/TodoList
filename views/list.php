<?php include_once("partials/header.php");?>
<div class="content">
  <div class="container">
    <h2>TODOLIST - TOPIC TEST IN EST ROUGE COMPANY</h2>
    <div class="btn-group">
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
      <tr>
        <td>1</td>
        <td>Test Topic</td>
        <td>03/16/2019</td>
        <td>03/18/2019</td>
        <td>Doing</td>
        <td>
          <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
            <div class="btn-group btn-group-sm" style="float: none;">
              <a href="#" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Go to interview</td>
        <td>03/19/2019</td>
        <td>03/19/2019</td>
        <td>Planning</td>
        <td>
          <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
            <div class="btn-group btn-group-sm" style="float: none;">
              <a href="#" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
          </div>
        </td>
      </tr>
      </tbody>
    </table>
  </div><!--.container-->
</div><!--.page-content-->
<?php include_once("partials/footer.php");?>