<?php

trait Common {
  public $nameCategory;
  public $brand;



  public function getCommon(){
    return "$this->nameCategory, $this->brand";
  }
}


?>