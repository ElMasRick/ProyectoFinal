<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ventas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Sidebar -->
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
        <h1>Gestión de Ventas</h1>
        <p>Aquí puedes registrar nuevas ventas, ver el historial y generar reportes.</p>

        <!-- Formulario para registrar una venta -->
        <form action="agregar_venta.php" method="POST">
            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="producto" required>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="precio">Precio Unitario:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <label for="fecha">Fecha de Venta:</label>
            <input type="date" id="fecha" name="fecha" required>

            <button type="submit">Registrar Venta</button>
        </form>

        <!-- Tabla para listar ventas -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Café Molido</td>
                    <td>10</td>
                    <td>$4.00</td>
                    <td>$40.00</td>
                    <td>2024-10-01</td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
                <!-- Aquí se mostrarán más ventas de forma dinámica -->
            </tbody>
        </table>
    </div>

</body>
</html>
