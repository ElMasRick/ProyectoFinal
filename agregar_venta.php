<?php
// Aquí, más adelante, se añadirá la conexión con la base de datos.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $total = $cantidad * $precio;

    // Simular la inserción de la venta (en el futuro se conectará a la base de datos)
    echo "<h1>Venta Registrada</h1>";
    echo "<p>Producto: " . htmlspecialchars($producto) . "</p>";
    echo "<p>Cantidad: " . htmlspecialchars($cantidad) . "</p>";
    echo "<p>Precio Unitario: $" . htmlspecialchars($precio) . "</p>";
    echo "<p>Total: $" . htmlspecialchars($total) . "</p>";
    echo "<p>Fecha de Venta: " . htmlspecialchars($fecha) . "</p>";
}
?>
