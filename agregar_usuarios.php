<?php
// Aquí, más adelante, se añadirá la conexión con la base de datos.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    // Simular la inserción del usuario (en el futuro se conectará a la base de datos)
    echo "<h1>Usuario Agregado</h1>";
    echo "<p>Nombre de Usuario: " . htmlspecialchars($nombre_usuario) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Rol: " . htmlspecialchars($rol) . "</p>";
}
?>
