<?php
class Link{
  private $id;
  private $name;
  private $uri;
  private $date;

  public function __construct($_id, $_name, $_uri, $_date){
    $id = $_id;
    $name = $_name;
    $uri = $_uri;
    $date = $_date;
  }

  public function getId(){
    return $id;
  }
  public function getUri(){
    return $uri;
  }
  public function getDate(){
    return $date;
  }
  public function setUri($_uri){
    $uri = $_uri;
  }
  public function setDate($_date){
    $date = $_date;
  }
}
?>
