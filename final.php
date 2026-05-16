<?php
session_start();

$intentos = isset($_SESSION["intentos"]) ? $_SESSION["intentos"] : 0;

session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Recuperado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>🎉 ¡Acceso Recuperado! 🎉</h1>
        
        <p>🔓 Has desbloqueado todos los niveles del servidor perdido con éxito.</p>
        <p>💾 Los archivos han sido restaurados correctamente y el sistema está 100% seguro.</p>
        
        <p>📊 Intentos totales realizados: <strong><?php echo $intentos; ?></strong></p>
        
        <a href="index.php" class="boton">🔄 Volver a jugar</a>
    </div>
</body>
</html>