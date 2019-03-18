<?php
namespace TodoList\Models;

class Database {
  private $hostName = 'localhost';
  private $userName = 'root';
  private $password = '';
  private $database = 'todo';

  private $conn = NULL;
  private $result = NULL;

  /* Connect to database */
  public function connect()
  {
    if(!$this->conn)
    {
      $this->conn = mysqli_connect($this->hostName, $this->userName, $this->password, $this->database)  or die ('Cannot to connect database!');
      mysqli_set_charset($this->conn, 'utf8');
    }
    return $this->conn;
  }

  /* Close connection to database */
  public function close() {
    if($this->conn)
    {
      mysqli_close($this->conn);
    }
  }

  /* Query to dabase */
  public function execute($sql)
  {
    $this->result = $this->conn->query($sql);
    return $this->result;
  }

  /* Get list data from table work */
  public function getListData()
  {
    $sql= "SELECT * FROM work";
    $this->execute($sql);
    $data  = array();
    if(!$this->result) return;
    while ($row = mysqli_fetch_assoc($this->result)){
      $data[] = $row;
    }
    return $data;
  }

  /* Get data from table work follow by id */
  public function getDataByID($id)
  {
    $sql= "SELECT * FROM work where id=$id";
    $this->execute($sql);
    $data  = array();
    if (mysqli_num_rows($this->result) > 0){
      $data = mysqli_fetch_assoc($this->result);
    }
    return $data;
  }

  /* Insert data to table work */
  public function insertData($name, $startDate, $endDate, $status)
  {
    $sql = "INSERT INTO work(id, name, start_date, end_date, status) VALUES(null, '$name', '$startDate', '$endDate', '$status')";
    return $this->execute($sql);
  }

  /* Update data in table work */
  public function updateData($id, $name, $startDate, $endDate, $status)
  {
    $sql = "UPDATE work SET name = '$name', start_date = '$startDate', end_date = '$endDate', status = '$status' WHERE id = '$id'";
    return $this->execute($sql);
  }

  /* Delete data in table work */
  public function deleteData($id) {
    $sql = "DELETE FROM work WHERE id = '$id'";
    return $this->execute($sql);
  }
}
?>