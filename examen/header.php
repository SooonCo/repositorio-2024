<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Muebles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/logo.png" alt="Logo" class="d-inline-block align-top" style="height: 40px;">
            <span class="ml-2" style="color: white; font-size: 18px;">Inicio</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>
                    <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                        <a class="dropdown-item" href="#">Sofás</a>
                        <a class="dropdown-item" href="#">Mesas</a>
                        <a class="dropdown-item" href="#">Sillas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="promocionesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Promociones</a>
                    <div class="dropdown-menu" aria-labelledby="promocionesDropdown">
                        <a class="dropdown-item" href="#">Descuentos</a>
                        <a class="dropdown-item" href="#">Ofertas</a>
                        <a class="dropdown-item" href="#">Liquidaciones</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="productotemporada.php">Productos de Temporada</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
            <form class="form-inline ml-lg-3">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
</body>
</html>
