<?php

class Database {
  private $mysqli;
  private $result;

  const LOCATION = 'localhost';
  const LOGIN = 'root';
  const PASSWD = 'root';


  public function __construct($db_name){
    // hier de verbinding opstarten
    $this->mysqli = new mysqli(
      self::LOCATION,
      self::LOGIN,
      self::PASSWD,
      $db_name);


      // geen connectie? script afbreken
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
  }

  public function doSQL($query){
    $this->result = $this->mysqli->query($query)
      or die($this->$mysqli->error.__LINE__);
  }

  public function readRecord(){
    return $this->result->fetch_assoc();
  }

  public function addRecord($query){
    $this->mysqli->query($query);
    return "je moeder";
  }
}
