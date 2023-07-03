<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <?php   require_once ("./data/db.php"); ?>

    <title>Document</title>
</head>
<body>
    <header>
            <div class="container mt-5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">CANE&GATTO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Shop</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categorie
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Dog</a></li>
                                    <li><a class="dropdown-item" href="#">Cat</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Carrello</a>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container mt-5 d-flex flex-wrap gap-5">
            <?php
                foreach ($products as $key => $value) {
            ?>

            <div class="card py-2" style="width: 18rem;">
                <div class="container w-25 border border-secondary">
                    <img src="<?php echo $value -> getCategory() -> getIcon() ?>" class="card-img-top" alt="<?php echo $value -> getCategory() -> getCategoryName() ?>">
                </div>
                <div class="container w-90 mt-3">
                    <img src="<?php echo $value -> getImgURL() ?>" class="card-img-top" alt="<?php echo $value -> getName() ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value -> getName() ?></h5>
                    <p class="card-text"><?php echo $value -> getDescription() ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prezzo: <?php echo $value -> getPrice() ?> &euro;</li>
                    <li class="list-group-item">Tipologia: <?php echo $value -> getType() ?></li>
                    <li class="list-group-item">Categoria: <?php echo $value -> getCategory() -> getCategoryName() ?></li>
                    <li class="<?php echo $value -> getInStock() ? "list-group-item text-success" : "list-group-item text-danger"?>"><?php echo $value -> getInStock() ? "Disponibile" : "Esaurito"?></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">BUY</a>
                    <a href="#" class="card-link">ADD CART</a>
                </div>
            </div>

            <?php
                }
            ?>

        </div>

    </main>
</body>
</html>