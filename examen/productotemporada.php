<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de Temporada</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'header.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center" style="font-family: 'Arial', sans-serif;">Productos de Temporada</h1>
        <div class="oferta">
            <h2 class="text-danger text-center">¡Ofertas por Tiempo Limitado!</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 tarjeta">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_925822-MLM78548479631_082024-O.webp" alt="Producto 1" class="imagen">
                        <div class="contenido">
                            <h3>Escritorio Minimalista</h3>
                            <p>Escritorio moderno con acabado en madera clara. Ideal para cualquier espacio de trabajo.</p>
                            <p class="precio">$2,199</p>
                            <button class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                    <div class="col-md-4 tarjeta">
                        <img src="https://m.media-amazon.com/images/I/51hXwQlK7sS._AC_UF894,1000_QL80_.jpg" alt="Producto 2" class="imagen">
                        <div class="contenido">
                            <h3>Silla Ergonomica</h3>
                            <p>Silla con soporte lumbar ajustable, perfecta para largas jornadas de trabajo.</p>
                            <p class="precio">1,100</p>
                            <button class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                    <div class="col-md-4 tarjeta">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_878597-CBT72073381655_102023-O.webp" alt="Producto 3" class="imagen">
                        <div class="contenido">
                            <h3>Lámpara LED Moderna</h3>
                            <p>Lámpara de escritorio con iluminación LED, regulable y con diseño contemporáneo.</p>
                            <p class="precio">$600</p>
                            <button class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://cuposon.com.mx/lunamuebles/flayer118/lunamueblesflayer118a1.jpg" alt="Imagen a la derecha" class="img-fluid" style="max-width: 100%;">
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3 bg-dark text-white">© 2024 Mi Tienda - Todos los derechos reservados.</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
