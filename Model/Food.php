<?php



class Food extends Product{

  public $nameCategory;
  public $brand;

  public $subject;


  public function __construct(int $_id, string $_image, string $_title, float $_price, Subject $_subject, string $_nameCategory, string $_brand){

    parent::__construct($_id, $_image, $_title, $_price);

      $this-> nameCategory = $_nameCategory;
      $this-> brand = $_brand;
      
      $this-> subject = $_subject;

  }


}


?>