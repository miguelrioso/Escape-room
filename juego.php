<?php
session_start();
include("conexion.php");

if (!isset($_SESSION["nivel"])) {
    $_SESSION["nivel"] = 1;
}
if (!isset($_SESSION["intentos"])) {
    $_SESSION["intentos"] = 0;
}

$nivel = $_SESSION["nivel"];
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta_usuario = trim($_POST["respuesta"]);
    
    $sql_validar = "SELECT * FROM pistas WHERE orden = $nivel";
    $resultado_val = $conexion->query($sql_validar);
    $pista_validar = $resultado_val->fetch_assoc();
    
    $_SESSION["intentos"]++;
    
    if (strcasecmp($respuesta_usuario, $pista_validar["respuesta"]) == 0) {
        $mensaje = $pista_validar["mensaje_exito"];
        $_SESSION["nivel"]++;
        $nivel = $_SESSION["nivel"];
        
        $sql_siguiente = "SELECT * FROM pistas WHERE orden = $nivel";
        $resultado_sig = $conexion->query($sql_siguiente);
        if ($resultado_sig->num_rows == 0) {
            header("Location: final.php");
            exit();
        }
    } else {
        $mensaje = "Respuesta incorrecta. El servidor rechaza el acceso.";
    }
}

$sql = "SELECT * FROM pistas WHERE orden = $nivel";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 0) {
    header("Location: final.php");
    exit();
}

$pista = $resultado->fetch_assoc();

$clase_alerta = (strpos($mensaje, "incorrecta") === false) ? "alerta-exito" : "alerta";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sala de Servidores - Desafío</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Nivel <?php echo $nivel; ?></h1>
        
        <?php if (!empty($mensaje)): ?>
            <div class="<?php echo $clase_alerta; ?>">
                <p><?php echo $mensaje; ?></p>
            </div>
        <?php endif; ?>

        <div class="pista">
            <h2>Pista encontrada</h2>
            <p><?php echo $pista["pregunta"]; ?></p>
        </div>

        <form method="POST" onsubmit="return validarFormulario();">
            <input type="text" name="respuesta" id="respuesta" placeholder="Ingresa tu respuesta">
            <button type="submit">Enviar respuesta</button>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>