<!DOCTYPE html>
<?php

require_once './Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Doghouse.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Db/db.php';

$dogsProducts = [];
$catsProducts = [];

foreach ($products as $product) {

    if ($product['category'] === 'food') {
        $item = new Food('f', $product['img'], $product['title'], $product['price'], $product['weigth'], $product['expirationDate']);
        $item->setAnimals($product['animals']);
        $item->setType($product['category']);
        $item->setIsAvialable($product['isDiscounted']);
        $item->setPercDiscount($product['percDiscount']);
        $item->setDiscountedPrice($product['price'], $product['percDiscount'], $product['isDiscounted']);
        if ($product['animals'] === 'dog') {
            $dogsProducts[] = $item;
        } elseif ($product['animals'] === 'cat') {
            $catsProducts[] = $item;
        }
    } elseif ($product['category'] === 'doghouse') {
        $item = new Doghouse('f', $product['img'], $product['title'], $product['price'], $product['prodLength'], $product['prodHeight']);
        $item->setAnimals($product['animals']);
        $item->setType($product['category']);
        $item->setIsAvialable($product['isDiscounted']);
        $item->setPercDiscount($product['percDiscount']);
        $item->setDiscountedPrice($product['price'], $product['percDiscount'], $product['isDiscounted']);
        if ($product['animals'] === 'dog') {
            $dogsProducts[] = $item;
        } elseif ($product['animals'] === 'cat') {
            $catsProducts[] = $item;
        }
    } elseif ($product['category'] === 'toy') {
        $item = new Toy('f', $product['img'], $product['title'], $product['price'], $product['isForPuppies'], $product['isPlasticFree']);
        $item->setAnimals($product['animals']);
        $item->setType($product['category']);
        $item->setIsAvialable($product['isDiscounted']);
        $item->setPercDiscount($product['percDiscount']);
        $item->setDiscountedPrice($product['price'], $product['percDiscount'], $product['isDiscounted']);
        if ($product['animals'] === 'dog') {
            $dogsProducts[] = $item;
        } elseif ($product['animals'] === 'cat') {
            $catsProducts[] = $item;
        }
    }
}

// var_dump($dogsProducts);
// var_dump($catsProducts);

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="wrapper">
            <h1>Dogs products</h1>

            <div class="grid">
                <?php foreach ($dogsProducts as $prod) : ?>

                    <div class="card">
                        <img src="<?php echo $prod->getImg() ?>" class="card-img-top">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Name: <?php echo $prod->getTitle(); ?></h5>
                            <p class="card-text text-decoration-line-through">Price: <?php echo $prod->getPrice(); ?> €</p>
                            <p class="card-text">New Price: <?php echo $prod->getDiscountedPrice(); ?> €</p>
                            <p class="card-text">For your: <?php echo $prod->getAnimals(); ?></p>
                            <p class="card-text">Type: <?php echo $prod->getType(); ?></p>
                        </div>
                    </div>


                <?php endforeach ?>


            </div>

        </div>

        <div class="wrapper">
            <h1>Cats products</h1>

            <div class="grid">
                <?php foreach ($catsProducts as $prod) : ?>

                    <div class="card">
                        <img src="<?php echo $prod->getImg() ?>" class="card-img-top">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Name: <?php echo $prod->getTitle(); ?></h5>
                            <p class="card-text text-decoration-line-through">Price: <?php echo $prod->getPrice(); ?> €</p>
                            <p class="card-text">New Price: <?php echo $prod->getDiscountedPrice(); ?> €</p>
                            <p class="card-text">For your: <?php echo $prod->getAnimals(); ?></p>
                            <p class="card-text">Type: <?php echo $prod->getType(); ?></p>
                        </div>
                    </div>


                <?php endforeach ?>


            </div>

        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>