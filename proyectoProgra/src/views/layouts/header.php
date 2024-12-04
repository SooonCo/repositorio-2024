<?php 
    require __DIR__.'/../../helpers/functions.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RACOON-FORT</title>
    <link rel="stylesheet" href="/proyectoProgramacion/public/assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
    <header>
        <div class="logo">
        <a href="<?=BASE_URL?>" class="nav">
            <img class="logo-image" src="<?=ASSETS_URL?>/img/logo.png" alt="Logo">
        </a>
            
            
            <nav>
            <ul>
                <span class="ml-2" style="color: white; font-size: 18px; font-weight: bold">RACOON-FORT</span>
                <li><a class="navigation-link" href="#">Productos de temporada</a></li>
                <li><a class="navigation-link" href="#">Promociones</a></li>
                <li><a class="navigation-link" href="<?=BASE_URL?>/../src/views/usuarios/register.php">Registrarse</a></li>
                <li><a class="navigation-link" href="#">Categorías</a>
                <ul class="submenu">
                    <?php foreach ($categories as $category): ?>
                        <li><a href="<?=BASE_URL?>/../src/views/categories/details.php?category=<?=$category['abbreviation']?>"><?=$category['name']?></a></li>
                        <?php endforeach; ?>
                </ul>
                </li>
                <li><a class="navigation-link" href="#">Contactos</a></li>
                
                <div class="carrito">
                <a href="<?=BASE_URL?>" class="nav">
                <img class="carrito-image" src="<?=ASSETS_URL?>/img/carrito.png" alt="Carrito">
                </a>
                </div>
               
                <form class="search-bar form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                 </form>
        
            </ul>
        </nav>
        </div>
       
       
    </header>
</body>
</html>
