<?php
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';+
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Accessory.php';

require_once __DIR__ . '/Model/Subject.php';
require_once __DIR__ . '/db.php';

// filtro l'array generale dei prodotti in base alla classe separando quindi cibo, giochi, accessori.
// $foods = array_filter($products, fn ($product) => get_class($product) === 'Food');

// $toys = array_filter($products, fn ($product) => get_class($product) === 'Toy');

// $accessories = array_filter($products, fn ($product) => get_class($product) === 'Accessory');

// var_dump($db)
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Online</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- fontawesomw -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous'/>

  <!-- css -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="container">
  <h1 class="text-center my-4">Aquista Online</h1>
  <div class="row">
    <!-- <h3>Cibo</h3> -->
      <?php foreach($db as $product): ?>
        <div class="col my-3">

          <div class="card my-3 my-card  h-100" style="width: 18rem;">
            <img src="<?php echo $product->image ?>" class="card-imgss-top my-img" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $product->nameCategory ?>
                
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  <?php echo $product->brand ?>
                </h6>
                <p class="card-text"> <?php echo $product->subject->icon  ?></p>
                <p class="card-text">Tipologia prodotto: <?php echo $product->title ?></p>
                <p class="card-text">Prezzo: &euro; <?php echo $product->price ?></p>
                <p class="card-text">Descrizione: <?php echo $product->material ?? $product->ingredient ?? $product->funzionalita?></p>
                <a href="#" class="btn btn-primary">Acquista</a>
              </div>
          </div>

        </div>
      <?php endforeach; ?>

      <!-- <h3>Giochi</h3>
      <?php foreach($db as $product): ?>
        <div class="col">

          <div class="card my-3 my-card" style="width: 18rem;">
            <img src="<?php echo $product->image ?>" class="card-imgss-top my-img" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $product->nameCategory ?>
                
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  <?php echo $product->brand ?>
                </h6>
                <p class="card-text"> <?php echo $product->subject->icon  ?></p>
                <p class="card-text">Tipologia prodotto: <?php echo $product->title ?></p>
                <p class="card-text">Prezzo: &euro; <?php echo $product->price ?></p>
                <p class="card-text">Descrizione: <?php echo $product->material ?? $product->ingredient ?? $product->funzionalita?></p>
                <a href="#" class="btn btn-primary">Acquista</a>
              </div>
          </div>

        </div>
      <?php endforeach; ?> -->

      <!-- <h3>Accessori</h3>
      <?php foreach($db as $product): ?>
        <div class="col">

          <div class="card my-3 my-card" style="width: 18rem;">
            <img src="<?php echo $product->image ?>" class="card-imgss-top my-img" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $product->nameCategory ?>
                
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  <?php echo $product->brand ?>
                </h6>
                <p class="card-text"> <?php echo $product->subject->icon  ?></p>
                <p class="card-text">Tipologia prodotto: <?php echo $product->title ?></p>
                <p class="card-text">Prezzo: &euro; <?php echo $product->price ?></p>
                <p class="card-text">Descrizione: <?php echo $product->material ?? $product->ingredient ?? $product->funzionalita?></p>
                <a href="#" class="btn btn-primary">Acquista</a>
              </div>
          </div>

        </div>
      <?php endforeach; ?> -->
  </div>
</div>


</body>
</html>