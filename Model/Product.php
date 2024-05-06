<?php



class Product {

  protected $id;
  public $image;
  public $title;
  public $price;




  function __construct(int $_id, string $_image, string $_title, float $_price){

    $this-> id = $_id;
    $this-> image = $_image;
    // $this-> setImg($_image);
    $this-> title = $_title;
    $this-> price = $_price;

  }

  // public function setImg($_image) {
  //   if (empty($_image) || (str_contains($_image, '.jpg' || '.png'))) {
  //     $this-> image = $_image;
  //   } 
  //     throw new Exception("il formato dell'immagine deve essere o .jpg o .png");
  // }


}


?>

