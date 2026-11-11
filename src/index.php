<?php
mysqli_report(MYSQLI_REPORT_OFF);

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$name = getenv('DB_NAME');

$conn = new mysqli($host, $user, $pass, $name);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Hola Mundo con MySQL</title>
</head>
<body>
  <h1>Hola Mundo</h1>
  <?php if ($conn->connect_error): ?>
    <p style="color:red;">Error de conexión: <?= htmlspecialchars($conn->connect_error) ?></p>
  <?php else: ?>
    <p style="color:green;">Conexión exitosa a MySQL.</p>
    <p>Versión del servidor: <?= $conn->server_info ?></p>
    <p>Base de datos: <?= htmlspecialchars($name) ?></p>
    <?php $conn->close(); ?>
  <?php endif; ?>
</body>
</html>