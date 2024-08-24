<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulces del Valle - Clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Dulces del Valle</h1>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="mission.html">Misión</a></li>
                <li><a href="vision.html">Visión</a></li>
                <li><a href="areas.html">Áreas</a></li>
                <li><a href="clients.php">Clientes</a></li>
            </ul>
        </nav>
    </header>
    <section id="clients">
        <h2>Listado de Clientes</h2>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM clientes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nombre"] . " - " . $row["email"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No se encontraron clientes.";
        }

        $conn->close();
        ?>

        <p>Fecha y Hora: <?php echo date("Y-m-d H:i:s"); ?></p>
        <p>Contador de Visitas: <?php include 'counter.php'; ?></p>
    </section>
    <footer>
        <p>&copy; 2024 Dulces del Valle. Todos los derechos reservados.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
