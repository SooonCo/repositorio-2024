<?php 
require __DIR__.'/../config/database.php';
$config = require __DIR__.'/../config/config.php';

define('BASE_URL', $config['base_url']);
define('ASSETS_URL', $config['assets_url']);

function getCategories() 
{
    $pdo = getPDO(); // Asume que getPDO() está correctamente definido

    try {
        $sql = "SELECT name, abbreviation FROM categories";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Devuelve todos los resultados
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return []; // Retorna un array vacío en caso de error
    }
}

// Función para obtener los datos de una categoría específica
function getCategoryData($category = null) {
    if ($category === null && isset($_GET['category'])) {
        $category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
    }

    if ($category === null) {
        return []; // Si no hay categoría, retornamos un array vacío
    }

    $pdo = getPDO(); // Asume que getPDO() está correctamente definido

    try {
        $sql = "SELECT * FROM categories WHERE abbreviation = :category LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['category' => $category]);
        $categoryData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$categoryData) {
            return []; // Si no se encuentra la categoría, retornamos un array vacío
        }

        return $categoryData; // Retorna los datos de la categoría
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return []; // Retorna un array vacío en caso de error
    }
}

function getAllProducts() {
    $pdo = getPDO();
    try {
        $stmt = $pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error al obtener los productos: " . $e->getMessage());
        return [];
    }
}

session_start();

function isAuthenticated() {
    return isset($_SESSION['user_id']);
}

function redirectIfNotAuthenticated($redirectUrl = '/login.php') {
    if (!isAuthenticated()) {
        header("Location: $redirectUrl");
        exit();
    }
}

