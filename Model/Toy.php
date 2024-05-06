<?php
require_once __DIR__ . '/Common.php';


class Toy extends Product{

  use Common;

  public $funzionalita;


  public $subject;


  public function __construct(int $_id, string $_image, string $_title, float $_price, Subject $_subject, string $_funzionalita){

    parent::__construct($_id, $_image, $_title, $_price);

      $this-> funzionalita = $_funzionalita;
    
      
      $this-> subject = $_subject;

  }


}


?>