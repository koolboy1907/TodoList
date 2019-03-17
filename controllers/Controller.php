<?php
include_once("models/Model.php");

class Controller {
  public $model;

  public function __construct()
  {
    $this->model = new Model();
  }

  public function action()
  {
    $action = isset($_GET['action']) ? $_GET['action'] : '';
    switch ($action) {
      case 'add':
//       if(isset($_POST['submit'])) {
//         $db->insertData($name, $startDate, $endDate, $status);
//       }
        require_once('views/add.php');
        break;
      case 'edit':
//       if($id) {
//         $work = $db->getDataByID($id);
//
//         if(isset($_POST['submit'])){
//           if($db->updateData($id, $name, $startDate, $endDate, $status)) {
//             header('location: index.php?controller=todo&action=list');
//           }
//         }
//       }
        require_once('views/edit.php');
        break;
      case 'delete':
//       if($id) {
//         $db->deleteData($id);
//         header('location: index.php?controller=todo&action=list');
//       }

        break;
      case 'list':
        //$works = $db->getListData();
        require_once('views/list.php');
        break;
      default:
        require_once('views/list.php');
        break;
    }
  }
}
?>