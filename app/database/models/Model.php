<?php
namespace app\database\models;

use app\database\Connect;
abstract class Model{

  protected string $table;

  public function all(string $fields = '*'){
    try {
      $connection = Connect::getConnection();
      $sql = "select {$fields} from {$this->table}";
      $query = $connection->query($sql);
      return $query->fetchAll();
    } 
    catch (\PDOException $e) {
      var_dump($e->getMessage());
    }
  }
}
?>