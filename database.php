<?php
include __DIR__ . '/Models/products.php';
include __DIR__ . '/Models/accesories.php';
include __DIR__ . '/Models/food.php';

$food1 = new food("Royal Canin Mini Adult", "43,99", "https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg", "545g", '<i class="fa-solid fa-dog"></i> cane', "prosciutto , riso");
$food2 = new food("Almo Nature Holistic Maintennance Medium Large Tonno e Riso", "44,99", "https://www.bauzaar.it/media/catalog/product/t/o/tonno_e_riso_cane_1.jpg?width=700&height=700&store=default&image-type=image", "600g", '<i class="fa-solid fa-dog"></i> cane', "manzo,cereali");
$food3 = new food("Almo nature Cat Daily Lattina", "34,99", "https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Coniglio-400.jpg", "400g", '<i class="fa-solid fa-cat"></i> gatto ', "tonno,pollo,prosciutto");
$food4 = new food("Mangime per Pesci Guppy in Fiocchi", "2,95", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg?v=1762045775", "30g",  '<i class="fa-solid fa-fish"></i> pesce', "Pesci e sottoprodotti dei pesci, cereali,lieviti,alghe");
$arrayFoods = [$food1, $food2, $food3, $food4];

$accesories1 = new accesories('Voliera Wilma in Legno', '184,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', '<i class="fa-solid fa-dove"></i> uceelli', "Legno", "M: L83 x P 67 x H 153 cm");
$accesories2 =  new accesories('Cartucce Filtranti per Filtro Easy Crystal', '2,29', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg?v=1759941808&quality=1&width=80&height=80', '<i class="fa-solid fa-fish"></i> pesce', "Materiale espanso", "ND");

$arrayAccesories = [$accesories1, $accesories2];
