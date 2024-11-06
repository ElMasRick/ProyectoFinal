<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
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
        <h1>Gestión de Usuarios</h1>
        <p>Aquí puedes agregar, editar y eliminar cuentas de usuario.</p>

        <!-- Formulario para agregar un usuario -->
        <form action="agregar_usuario.php" method="POST">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>

            <button type="submit">Agregar Usuario</button>
        </form>

        <!-- Tabla de usuarios (ejemplo estático) -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Usuario</th>
                    <th>Correo Electrónico</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Rivera</td>
                    <td>juan@example.com</td>
                    <td>Administrador</td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
                <!-- Aquí se mostrarán más usuarios de forma dinámica -->
            </tbody>
        </table>
    </div>

</body>
</html>
