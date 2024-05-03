<?php



class Product {

  protected $id;
  public $image;
  public $title;
  public $price;




  function __construct(int $_id, string $_image, string $_title, float $_price){

    $this-> id = $_id;
    $this-> image = $_image;
    $this-> title = $_title;
    $this-> price = $_price;

  }


}


?>

