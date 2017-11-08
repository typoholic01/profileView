<?php
require "DBSetting.php";

class Conn
{
  public $conn;


  public function __construct()
  {
    $host = DBSetting::host;
    $user = DBSetting::user;
    $pw = DBSetting::pw;
    $dbName = DBSetting::dbName;

    // Create connection
    $this->conn = new mysqli($host, $user, $pw, $dbName);
  }
}
?>
