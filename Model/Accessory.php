<?php
require_once __DIR__ . '/Common.php';


class Accessory extends Product{

  use Common;

  public $material;


  public $subject;


  public function __construct(int $_id, string $_image, string $_title, float $_price, Subject $_subject, string $_material){

    parent::__construct($_id, $_image, $_title, $_price);

      $this-> material = $_material;
      
      $this-> subject = $_subject;

  }


}


?>