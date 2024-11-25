<?php 
require __DIR__.'/../config/database.php';
$config = require __DIR__.'/../config/config.php';

define('BASE_URL', $config['base_url']);
define('ASSETS_URL', $config['assets_url']);

// Función para obtener las carreras
function getCareers() 
{
    $pdo = getPDO(); // Asume que getPDO() está correctamente definido

    try {
        $sql = "SELECT name, abbreviation FROM careers";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Devuelve todos los resultados
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return []; // Retorna un array vacío en caso de error
    }
}

// Función para obtener los datos de una carrera específica
function getCareerData($career = null) {
    if ($career === null && isset($_GET['career'])) {
        $career = filter_input(INPUT_GET, 'career', FILTER_SANITIZE_STRING);
    }

    if ($career === null) {
        return []; // Si no hay carrera, retornamos un array vacío
    }

    $pdo = getPDO(); // Asume que getPDO() está correctamente definido

    try {
        $sql = "SELECT * FROM careers WHERE abbreviation = :career LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['career' => $career]);
        $careerData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$careerData) {
            return []; // Si no se encuentra la carrera, retornamos un array vacío
        }

        return $careerData; // Retorna los datos de la carrera
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return []; // Retorna un array vacío en caso de error
    }
}

// Función para obtener todos los productos
function getAllProducts() {
    $pdo = getPDO(); // Asume que getPDO() está correctamente definido

    try {
        $stmt = $pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retorna todos los productos
    } catch (PDOException $e) {
        error_log("Error al obtener los productos: " . $e->getMessage());
        return []; // Retorna un array vacío en caso de error
    }
}
