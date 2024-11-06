<?php
// Aquí, más adelante, se añadirá la conexión con la base de datos.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre_producto = $_POST['nombre_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    // Simular la inserción del producto (en el futuro se conectará a la base de datos)
    echo "<h1>Producto Agregado</h1>";
    echo "<p>Nombre del Producto: " . htmlspecialchars($nombre_producto) . "</p>";
    echo "<p>Cantidad: " . htmlspecialchars($cantidad) . "</p>";
    echo "<p>Precio: $" . htmlspecialchars($precio) . "</p>";
}
?>
