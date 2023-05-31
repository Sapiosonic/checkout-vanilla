<?php 
  namespace app\database\models;

  class User extends Model{
    protected string $table = 'users';

    public $id;
    public $name;
  }
?>