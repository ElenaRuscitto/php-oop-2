<?php


$db = [
  new Product(1, 'img', 'cibo', 12.00),
  new Category(1, 'img', 'cibo', 12.00, new Subject('cat'), 'croccantini', 'Royal Canin'),


  new Product(2, 'img', 'cibo umido', 15, new Subject('gatto')),
  new Product(3, 'img', 'cucce', 30, new Subject('cane')),
  new Product(4, 'img', 'topo', 5, new Subject('gatto')),
];

?>