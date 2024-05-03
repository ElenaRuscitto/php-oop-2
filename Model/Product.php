<?php

require_once __DIR__ . '/Subject.php';

class Product {

  protected $id;
  public $name;
  public $price;
  
  public $subject;


  function __construct(int $_id, string $_name, int $_price, Subject $_subject){

    $this-> id = $_id;
    $this-> name = $_name;
    $this-> price = $_price;

    $this-> subject = $_subject;
  }


}


?>

// public function getFullStart() {
  //   return $this->id, $this->name, $this->subject, $this->price;
  // }