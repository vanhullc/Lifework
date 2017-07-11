<?php
class Profile{
  private $id;
  private $name;
  private $pic;
  private $links;

  public function __construct($_id, $_name, $_pic, $_links){
    $id = $_id;
    $name = $_name;
    $pic = $_pic;
    $links = $_links;
  }

  public function getId(){
    return $id;
  }
  public function getName(){
    return $name;
  }
  public function getPicUri(){
    return $pic;
  }
  public function getLinks(){
    return $links;
  }
  public function setName($_name){
    $name = $_name;
  }
  public function setPic($_pic){
    $pic = $_pic;
  }
  public function addLink($_link){
    $links += $_link;
  }
  public function toString(){
    return "My name is " + $name;
  }
};
?>
