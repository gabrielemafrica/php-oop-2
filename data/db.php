<?php

require_once ("./models/Category.php");
require_once ("./models/Product.php");

// categorie

$categoryDog = new Category("dog", "https://cdn-icons-png.flaticon.com/512/194/194279.png");
$categoryCat = new Category("cat", "https://img.freepik.com/premium-vector/cute-cat-head-cartoon-logo-cat-head-good-cat-care-related-products_487414-285.jpg?w=2000");

$categories = [$categoryDog, $categoryCat];

// prodotti

$description1= "Osso per cani: divertimento garantito per il tuo amico a quattro zampe.";
$description2= "Gomitolo di lana: un giocattolo perfetto per intrattenere e stimolare il tuo gatto.";
$description3= "Royal Canin: un cibo completo e bilanciato per mantenere il tuo cane in ottima salute.";
$description4= "Kitekat: un alimento gustoso e nutriente per coccolare il tuo gatto.";
$description5= "Cuccia Confort: un rifugio accogliente e termico per il comfort del tuo cane.";
$description6= "Cuccia Cat: uno spazio confortevole e sicuro per il sonno e il relax del tuo gatto.";


$productOsso = new Product ("Osso", 15, "https://st2.depositphotos.com/5647624/44107/i/450/depositphotos_441073656-stock-photo-femur-bone-of-cow-isolated.jpg", "gioco", true, $description1,$categoryDog);

$productGomitolo = new Product ("Gomitolo", 7, "https://img.pixers.pics/pho_wat(s3:700/FO/40/14/75/32/700_FO40147532_7ca99d8dbe7f8bf8c5db673be9df60b4.jpg,700,464,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,414,jpg)/adesivi-gomitolo-di-lana.jpg.jpg", "gioco", true, $description2, $categoryCat);

$productRoyalCanin = new Product ("Royal Canin", 40, "https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/hran/uscat/pentru/cini/aduli/de/ras/mic/9/400/rc_shn_adultmini_mv_eretailkit_ro_ro_9.jpg", "cibo", true, $description3, $categoryDog);

$productKitekat = new Product ("kitekat", 22, "https://shop-cdn-m.mediazs.com/bilder/kitekat/adult/pui/legume/6/400/164398_pla_marspl_kitekat_dryadult_chickenvegetables_hs_01_6.jpg", "cibo", true, $description4, $categoryCat);

$productCucciaConfort = new Product ("Cuccia Confort", 100, "https://www.perilcane.it/3730-large_default/cuccia-coibentata-termica-per-cani-modello-comfort.jpg", "cuccia", true, $description5, $categoryDog);

$productCucciaCat = new Product ("Cuccia Cat", 88, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ38evP9wCCwJF42jEn1pve4bKvU9H-C37h8A&usqp=CAU", "cuccia", true, $description6, $categoryCat);

$products = [$productOsso, $productGomitolo, $productRoyalCanin, $productKitekat, $productCucciaConfort, $productCucciaCat];