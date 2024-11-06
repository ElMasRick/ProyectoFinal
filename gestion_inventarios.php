<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventarios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Incluir el sidebar aquí -->
    <aside class="sidebar">
        <h2>Opciones</h2>
        <div class="buttons">
            <a href="gestion_inventarios.php">Gestión de Inventarios</a>
            <a href="gestion_ventas.php">Gestión de Ventas</a>
            <a href="reportes.php">Reportes</a>
            <a href="usuarios.php">Usuarios</a>
        </div>
    </aside>

    <!-- Contenido principal -->
    <div class="main-content">
        <h1>Gestión de Inventarios</h1>
        <p>Aquí puedes ver, agregar, modificar o eliminar productos del inventario.</p>

        <!-- Formulario para agregar un producto -->
        <form action="agregar_producto.php" method="POST">
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" id="nombre_producto" name="nombre_producto" required>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" required>

            <button type="submit">Agregar Producto</button>
        </form>

        <!-- Tabla de inventario (solo de ejemplo) -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto A</td>
                    <td>100</td>
                    <td>$50.00</td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
                <!-- Aquí se mostrarán más productos -->
            </tbody>
        </table>
    </div>

</body>
</html>
