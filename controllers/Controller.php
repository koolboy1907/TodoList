<?php
  include_once("models/Database.php");

  class Controller {
    private $database;

    public function __construct()
    {
      $this->database = new Database();
      $this->database->connect();
    }

    public function action()
    {
      $action = isset($_GET['action']) ? $_GET['action'] : '';
      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $startDate = isset($_POST['start_date']) ? date('Y-m-d H:i:s',strtotime($_POST['start_date'])) : '';
      $endDate = isset($_POST['end_date']) ? date('Y-m-d H:i:s',strtotime($_POST['end_date'])) : '';
      $status = isset($_POST['status']) ? $_POST['status'] : '';
      $arrStatus = ['Planning', 'Doing', 'Complete'];
      
      switch ($action) {
        case 'list':
          $works = $this->database->getListData();
          require_once('views/list.php');
          break;

        case 'add':
         if(isset($_POST['submit'])) {
           $this->database->insertData($name, $startDate, $endDate, $status);
         }
          require_once('views/add.php');
          break;

        case 'edit':
         if($id) {
           $work = $this->database->getDataByID($id);
           if(isset($_POST['submit'])){
             if($this->database->updateData($id, $name, $startDate, $endDate, $status)) {
               header('location: /?action=list');
             }
           }
         }
          require_once('views/edit.php');
          break;

        case 'delete':
         if($id) {
           $this->database->deleteData($id);
           header('location: index.php?action=list');
         }
          break;

        case 'calendar':
          $workCalendar = $this->database->getListData();
          require_once('views/calendar.php');
          break;

        default:
          $works = $this->database->getListData();
          require_once('views/list.php');
          break;
      }
    }
}
?>