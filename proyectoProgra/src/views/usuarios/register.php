<?php
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];

    try {
        $pdo = getPDO();
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
        header('Location: /login.php');
        exit();
    } catch (PDOException $e) {
        error_log("Error al registrar el usuario: " . $e->getMessage());
        $error = "No se pudo registrar el usuario.";
    }
}
?>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Usuario" required>
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <select name="role">
        <option value="user">Usuario</option>
        <option value="admin">Administrador</option>
    </select>
    <button type="submit">Registrar</button>
</form>
