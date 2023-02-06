<?php
include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP-OOP-2</title>
</head>

<body>
    <div class="container pt-5">
        <h1> I nostri prodotti :</h1>
        <div class="  pt-5 row  justify-content-around ">
            <?php foreach ($arrayFoods as $child) { ?>
                <div class="card col-3 m-5 object-fit">
                    <img class="h-50 p-1 object-fit-contain" src="<?php echo $child->img; ?>" alt="prodotto">
                    <h2><?php echo  $child->title; ?> </h2>
                    <p><?php echo  $child->race; ?> </p>
                    <p>Prezzo: &#8364; <?php echo  $child->price; ?></p>
                    <p>Peso netto: <?php echo  $child->weight; ?></p>
                    <p>Ingredienti: <?php echo  $child->ingredients; ?></p>
                </div>
            <?php } ?>

        </div>

    </div>

</body>

</html>