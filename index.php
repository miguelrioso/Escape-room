<?php
session_start();
$_SESSION["nivel"] = 1;
$_SESSION["intentos"] = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El Servidor Perdido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>📟 El Servidor Perdido 📟</h1>
        
        <p>⚠️ <strong>TRANSMISIÓN ENTRANTE: AÑO 2035</strong> ⚠️</p>
        
        <p>🗄️ Un antiguo servidor de respaldo ha sido encontrado en una sala abandonada del datacenter.</p>
        <p>🔑 Para recuperar los archivos, deberás superar una serie de pistas digitales.</p>
        <p>⚡ Cada respuesta correcta desbloqueará el siguiente nivel. Si fallas, el sistema te dará una advertencia.</p>
        <p>⏳ ¿Podrás recuperar el acceso antes de que el servidor se apague?</p>
        
        <a href="juego.php" class="boton">⚡ Iniciar Desafío ⚡</a>
    </div>
</body>
</html>