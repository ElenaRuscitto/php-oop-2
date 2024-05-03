<?php
class Subject {

  public $type;
  public $icon;




  function __construct(string $_type){

    $this-> type = $_type;

    $this-> icon = $this -> setIcon($_type);

  }

  public function setIcon($_type){
    if($_type == 'dog') {
       return '<i class="fa-solid fa-dog"></i>';
    } elseif($_type == 'cat') {
       return  '<i class="fa-solid fa-cat"></i>';
    } else {
       return  '<i class="fa-solid fa-question"></i>';
    }
  } 

}




?>

