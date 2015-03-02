<?php


class Database{
  include 'config.inc.php';

  public function __construct($database){ // @param: de database waarmee verbonden moet worden
    // hier de verbinding tot stand brengen met de variablen in config.inc.php
    $con = mysqli_connect($mysql_location, $mysql_login, $mysql_passwd);

    // kijken of de verbinding gelukt is
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQLi: " .mysqli_connect_error();
    }
  }

  public function doSQL($sql){
    $result = mysqli_query($con, $sql);
  }
}

?>
