<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes de Ventas</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Agregar Chart.js -->
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
        <h1>Reportes de Ventas</h1>
        <p>Aquí puedes visualizar reportes sobre las ventas realizadas.</p>

        <!-- Seleccionar tipo de reporte -->
        <form action="reportes.php" method="GET">
            <label for="tipo_reporte">Selecciona el tipo de reporte:</label>
            <select id="tipo_reporte" name="tipo_reporte">
                <option value="ventas_por_dia">Ventas por Día</option>
                <option value="ventas_por_mes">Ventas por Mes</option>
                <option value="ventas_por_producto">Ventas por Producto</option>
            </select>
            <button type="submit">Generar Reporte</button>
        </form>

        <!-- Gráfico de reportes -->
        <canvas id="ventasChart" width="400" height="200"></canvas>
    </div>

    <script>
        // Datos simulados
        const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        const dataVentas = [5000, 4000, 8000, 12000, 7000, 10000, 9000, 15000, 8000, 13000, 10000, 6000]; // Datos ficticios

        const data = {
            labels: labels,
            datasets: [{
                label: 'Ventas por Mes',
                data: dataVentas,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar', // Tipo de gráfico
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Generar el gráfico
        const ventasChart = new Chart(
            document.getElementById('ventasChart'),
            config
        );
    </script>

</body>
</html>
