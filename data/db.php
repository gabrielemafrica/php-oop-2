<?php

require_once ("./models/Category.php");
require_once ("./models/Product.php");

// categorie

$categoryDog = new Category("dog", "https://cdn-icons-png.flaticon.com/512/194/194279.png");
$categoryCat = new Category("cat", "https://us.123rf.com/450wm/iboriz/iboriz1903/iboriz190300009/133955217-gr%C3%A1fico-de-tinta-de-maine-coon-cat-en-vector-dise%C3%B1o-de-tatuaje.jpg");

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

$productKitekat = new Product ("kitekat", 22, "https://shop-cdn-m.mediazs.com/bilder/kitekat/adult/pui/legume/6/400/164398_pla_marspl_kitekat_dryadult_chickenvegetables_hs_01_6.jpg", "cibo", false, $description4, $categoryCat);

$productCucciaConfort = new Product ("Cuccia Confort", 100, "https://www.perilcane.it/3730-large_default/cuccia-coibentata-termica-per-cani-modello-comfort.jpg", "cuccia", true, $description5, $categoryDog);

$productCucciaCat = new Product ("Cuccia Cat", 88, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ38evP9wCCwJF42jEn1pve4bKvU9H-C37h8A&usqp=CAU", "cuccia", false, $description6, $categoryCat);

$products = [$productOsso, $productGomitolo, $productRoyalCanin, $productKitekat, $productCucciaConfort, $productCucciaCat];

//altri prodotti

$description7 = "Giocattolo interattivo per cani: stimola la mente e mantiene il tuo cane attivo.";
$description8 = "Giochino a palla per gatti: perfetto per far divertire il tuo felino.";
$description9 = "Cibo specifico per cani anziani: favorisce la salute delle articolazioni e la vitalità.";
$description10 = "Cibo umido per gatti: una delizia gustosa e saporita per il tuo micio.";
$description11 = "Cuccia impermeabile per cani: ideale per proteggere il tuo cane durante le giornate di pioggia.";
$description12 = "Cuccia a forma di castello per gatti: un luogo incantevole per il sonno e il relax felino.";
$description13 = "Snack dentale per cani: favorisce l'igiene orale e mantiene il respiro fresco.";
$description14 = "Giochino con piume per gatti: stimola l'istinto di caccia e intrattiene il tuo micio.";
$description15 = "Ciotola antiscivolo per cani: previene gli schizzi e mantiene pulito il pavimento.";
$description16 = "Scratching post per gatti: un punto d'appoggio perfetto per le unghie dei felini.";

$productGiocattoloCane = new Product("Giocattolo per cani", 10, "https://m.media-amazon.com/images/I/71qPpaEidEL._AC_UF894,1000_QL80_.jpg", "gioco", true, $description7, $categoryDog);
$productPallaGatto = new Product("Palla per gatti", 5, "https://m.media-amazon.com/images/I/61+Y9kA56JL.jpg", "gioco", true, $description8, $categoryCat);
$productCiboAnziani = new Product("Cibo per cani anziani", 35, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU0JAdX6MgfuvRfxB2yiFCU_fC5RqJR34lfbvbJLELet9JOSoIehNKI7pO0wfGW83poXo&usqp=CAU", "cibo", false, $description9, $categoryDog);
$productCiboUmidoGatto = new Product("Cibo umido per gatti", 3, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpucjXXFQn7WprKbDcNKAkoCjpJJqzs8mHvwEa_wKChgr3vKRjmYgMyHkn33vE_HaAO-I&usqp=CAU", "cibo", true, $description10, $categoryCat);
$productCucciaImpermeabile = new Product("Cuccia impermeabile per cani", 75, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeGvRStPJnxti8ihl3TYAf92My4JCQNpq8FQ&usqp=CAU", "cuccia", true, $description11, $categoryDog);
$productCucciaCastelloGatto = new Product("Cuccia a forma di castello per gatti", 55, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwgN_xkibPzQhXaZ_D5XnhTF1ATqmje-gbdegnuPss1vHE6UrNqmelL0ZWraCA4Dzv6Ss&usqp=CAU", "cuccia", true, $description12, $categoryCat);
$productSnackDentale = new Product("Snack dentale per cani", 8, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlV4O8tb41vj0KO071ESAuz4dZGZUSCghYXCuId7WO7KUmt7hfDBLh70MlXp9RN-pK9l4&usqp=CAU", "snack", false, $description13, $categoryDog);
$productGiochinoPiume = new Product("Giochino con piume per gatti", 6, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQvaxOsXMd3AUW87jDXx-qrBjmK9UuKyPPKQ&usqp=CAU", "gioco", true, $description14, $categoryCat);
$productCiotolaAntiscivolo = new Product("Ciotola antiscivolo per cani", 12, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNimSjTA6OLo5xX1DsY8wxp1qtIt9SUjf6lUbNTvvZUOM_CtogdJ-gBlUbwNn0OWOXY50&usqp=CAU", "accessorio", true, $description15, $categoryDog);
$productScratchingPost = new Product("Scratching post per gatti", 30, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0fAXjqMC-V1cBAwbdCf97Ewk3YTw7YZcngFJ0bHn5mt-XWgtFa4qDrbZbVD-HuwP0ajw&usqp=CAU", "accessorio", true, $description16, $categoryCat);

$additionalProducts = [$productGiocattoloCane, $productPallaGatto, $productCiboAnziani, $productCiboUmidoGatto, $productCucciaImpermeabile, $productCucciaCastelloGatto, $productSnackDentale, $productGiochinoPiume, $productCiotolaAntiscivolo, $productScratchingPost];

$products = array_merge($products, $additionalProducts);
