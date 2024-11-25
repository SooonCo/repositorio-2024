<?php
require_once __DIR__ . '/../config/database.php';

function getProductById($id) {
    $pdo = getPDO(); // Asegúrate de que esta función esté correctamente definida
    try {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error al obtener el producto: " . $e->getMessage());
        return null;
    }
}

// Validar el ID recibido
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    http_response_code(400); // Código de error para solicitudes incorrectas
    die("ID de producto no válido."); // Puedes redirigir a una página personalizada
}

// Obtener los datos del producto
$product = getProductById($id);
if (!$product) {
    http_response_code(404); // Código de error para recursos no encontrados
    die("Producto no encontrado."); // Puedes redirigir a una página personalizada
}

include_once __DIR__ . '/../src/views/layouts/header.php';
?>

<main>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1><?= htmlspecialchars($product['name']) ?></h1>
                <p class="precio">$<?= number_format($product['price'], 2) ?></p>
                <p><?= htmlspecialchars($product['description']) ?></p>
                <a href="carrito.php?add=<?= $product['id'] ?>" class="btn btn-success">Añadir al carrito</a>
            </div>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../src/views/layouts/footer.php'; ?>
