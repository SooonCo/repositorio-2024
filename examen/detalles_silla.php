<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Silla Elegante</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleControlsSilla" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.etsystatic.com/14586265/r/il/faaef3/3813134114/il_570xN.3813134114_li7b.jpg" class="d-block w-100" alt="Silla Elegante 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://m.media-amazon.com/images/I/71FG7ZUUY9L.jpg" class="d-block w-100" alt="Silla Elegante 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControlsSilla" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControlsSilla" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Silla Elegante</h2>
                <p>Una silla ergonómica con diseño moderno, perfecta para el hogar o la oficina.</p>
                <div>
                    <strong>Precio:</strong> $6,129<br>
                    <strong>Dimensiones:</strong> 45 cm x 50 cm x 90 cm<br>
                    <strong>Material:</strong> Tela y metal<br>
                    <strong>Colores:</strong> Negro, Gris, Azul
                </div>
                
                
                <div class="valoracion mt-3">
                    <strong>Valoración:</strong> ⭐️⭐️⭐️⭐️⭐️
                </div>

                <p class="mt-3"><strong>Reseña:</strong> Esta silla es muy cómoda y se adapta perfectamente a cualquier espacio, además de ser un gran complemento decorativo.</p>
                <button class="btn btn-primary" style="background-color: #a6d7cc; border-color: #a6d7cc;">Añadir al carrito</button>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
