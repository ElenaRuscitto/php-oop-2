<?php
require_once __DIR__ . '/Common.php';


class Food extends Product{

  use Common;

  public $ingredient;


  public $subject;


  public function __construct(int $_id, string $_image, string $_title, float $_price, Subject $_subject, string $_ingredient){

    parent::__construct($_id, $_image, $_title, $_price);

      // $this-> ingredient = $_ingredient;
      $this-> setIngredient($_ingredient);
      
      $this-> subject = $_subject;

  }

  public function setIngredient($_ingredient){
    if (empty($_ingredient) || strlen(($_ingredient) < 3 ) ){
      throw new Exception("Gli ingredienti devono contenere almeno 3 caratteri");
    }
    $this->ingredient = $_ingredient;
  }

}




?>