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
    <title>PHP-OOP-2</title>
</head>

<body>
    <div class="container pt-5">
        <h1> I nostri prodotti :</h1>
        <div class="  pt-5 row  justify-content-around">
            <?php foreach ($arrayFoods as $child) { ?>
                <div class="card col-4 object-fit">
                    <img class="h-50 object-fit-contain" src="<?php echo $child->img; ?>" alt="prodotto">


                </div>

            <?php } ?>

        </div>

    </div>

</body>

</html>