<?php
$prodotto1 =  new Food(1, 'https://m.media-amazon.com/images/I/517xJYiJ3oL.__AC_SX300_SY300_QL70_ML2_.jpg', 'cibo', 25.50, new Subject('cat'), 'pollo');
$prodotto1->nameCategory = "Croccantini complementari";
$prodotto1->brand = "Royal Canin";

$prodotto2 = new Food(2, 'https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', 'cibo', 13.99, new Subject('cat'), 'salmone');
$prodotto2->nameCategory = "Bocconcini in salsa";
$prodotto2->brand = "Sheba";

$prodotto3 = new Food(3, 'https://m.media-amazon.com/images/I/81wkkryRXgL.__AC_SX300_SY300_QL70_ML2_.jpg', 'cibo', 15.00, new Subject('dog'), 'manzo');
$prodotto3->nameCategory = "Croccantini completi";
$prodotto3->brand = "Purina";

$prodotto4 = new Food(4, 'https://m.media-amazon.com/images/I/71VlybfHBEL.__AC_SX300_SY300_QL70_ML2_.jpg', 'cibo', 14.99, new Subject('dog'), 'tonno');
$prodotto4->nameCategory = "Bocconcini in salsa";
$prodotto4->brand = "Almo Nature";

$prodotto5 = new Food(5, 'https://m.media-amazon.com/images/I/61ZxNEz9uDL.__AC_SX300_SY300_QL70_ML2_.jpg', 'cibo', 13.99, new Subject('cat'), 'spigola');
$prodotto5->nameCategory = "Bocconcini in salsa";
$prodotto5->brand = "Royal Canin";

$prodotto6 = new Accessory(6, 'https://m.media-amazon.com/images/I/71c8C+ByICL._AC_SY300_SX300_.jpg', 'cuccia', 55.99, new Subject('cat'), 'plastica' );
$prodotto6->nameCategory = "Cuccia ad igloo - dolce sonno";
$prodotto6->brand = "Green Home";

$prodotto7 =   new Accessory(7, 'https://m.media-amazon.com/images/I/51zrCKrxMNL.__AC_SX300_SY300_QL70_ML2_.jpg', 'cuccia', 45.99, new Subject(''), 'microfribra');
$prodotto7->nameCategory = "Letto a Ciambella Antistress e Morbida per Dormire";
$prodotto7->brand = "Green Home";

$prodotto8 = new Toy(8, 'https://m.media-amazon.com/images/I/71JIyEl-WEL.__AC_SX300_SY300_QL70_ML2_.jpg', 'gioco', 7.99, new Subject('cat'), 'anti-stress');
$prodotto8->nameCategory = "Bacchetta con Piume e Campanellino";
$prodotto8->brand = "AIDIYA";

$prodotto9 =  new Toy(9, 'https://m.media-amazon.com/images/I/71MxWPeyBaL.__AC_SY300_SX300_QL70_ML2_.jpg', 'gioco', 3.00, new Subject('dog'), 'da corsa');
$prodotto9->nameCategory = "Corda da gioco in puro cotone";
$prodotto9->brand = "Denta Fun";

$db = [

  $prodotto1,
  $prodotto2,
  $prodotto3,
  $prodotto4,
  $prodotto5,
  $prodotto6,
  $prodotto7,
  $prodotto8,
  $prodotto9,


];



?>

