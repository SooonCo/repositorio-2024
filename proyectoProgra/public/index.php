
    <?php 
        include_once __DIR__.'/../src/views/layouts/header.php';
        $products = getAllProducts();
    ?>
<main>
        <section class="container">
         <div class="hero-container">
         <img src="<?=ASSETS_URL?>/img/Amueblado.jpeg" alt="Imagen de fondo no encontrada" class="hero-background-image">
         
         <div class="hero-card">
            <h2 class="hero-title">RACOON-FORT</h2>
            <p class="hero-text">El confort que mereces, el estilo que amas</p>
        </div>
        </section>
    </div>
        </section>
        <section class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                            <p class="card-text">$<?= number_format($product['price'], 2) ?></p>
                            <a href="productos/detalles_producto.php?id=<?= $product['id'] ?>" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    </main>
    <?php include '../src/views/layouts/footer.php'; ?>