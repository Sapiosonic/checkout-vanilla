<?php
  namespace app\database;
  use PDO;

  class Connect{
    private static ?PDO $connection = null;

    public static function getConnection(){
      if(!self::$connection){
        self::$connection = new PDO('mysql:host=localhost;dbnam=miniloja', 'root', '', [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,]);
      }
      return self::$connection;
    }
  }
?>