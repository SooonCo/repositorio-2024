<?php 

include_once __DIR__ . '/../views/layouts/header.php';
$categories = getCategoryData();
?>
<?php if($category != null): ?>
    <h2><?=$category['name']?> (<?=$category['id']?>)</h2>
    <p><?=$category['description']?></p>
    <p>Precio: <?=$category['price']?></p>
    <p>Valoración: <?=$category['valoration']?></p>
<?php else: ?>
    <h2>No se encontró la categoría seleccionada.</h2>
    <a href="<?=BASE_URL?>">Volver al inicio</a>
<?php endif; ?>
hp endif; ?>

<?php
include_once __DIR__ . '/../views/layouts/footer.php';
?>