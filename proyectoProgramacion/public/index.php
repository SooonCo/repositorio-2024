
    <?php 
        include_once __DIR__.'/../src/views/layouts/header.php';
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
<section class="hero-container-2">
       <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    
                
                    
                    
                    <div class="col-md-6 mb-4">
                        <div class="tarjeta">
                            <img src="https://i.etsystatic.com/14586265/r/il/faaef3/3813134114/il_570xN.3813134114_li7b.jpg" alt="Silla Elegante" class="imagen">
                            <div class="contenido">
                                <h3>Silla Elegante</h3>
                                <p class="precio">$6,129</p>
                                <a href="detalles_producto.php?id=<?= $product['id'] ?>" class="btn btn-primary">Ver Más</a>


                            </div>
                        </div>
                    </div>
                    
                
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="text-center">Ofertas por Tiempo Limitado</h3>
                <div class="oferta">
                    <img src="https://assets.hotsale.com.mx/accounts/2/events/2/editions/32/promotions/93442/media/89144f6f-6177-45fb-9d58-73dfd729b3dd.webp" alt="Oferta 1" class="img-fluid">
                    <p class="precio text-center">$3,999</p>
                </div>
                <div class="oferta">
                    <img src="https://mubson.com/cdn/shop/files/Mesa-de-trabajo-3.webp?v=1699980831&width=1200" alt="Oferta 2" class="img-fluid">
                    <p class="precio text-center">Aproveche las ofertas por tiempo limitado</p>
                </div>
                <div class="oferta">
                    <img src="https://pbs.twimg.com/media/Dw4YkljXQAEtXwN.jpg" alt="Oferta 3" class="img-fluid">
                    <p class="precio text-center">Las mejores ofertas</p>
                </div>
            </div>
        </div>
    </div>
            </section>
            </section>
    </main>
    <?php include '../src/views/layouts/footer.php'; ?>