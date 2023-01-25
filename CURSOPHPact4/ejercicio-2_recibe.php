<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Ejercicio 2 (recibe)</title>
</head>
<body>
    <?php
    if (isset($_GET['espanol']) && isset($_GET['ingles'])) {        
        $espanol = $_GET['espanol'];
        $ingles = $_GET['ingles'];        
    ?>

        <p>Los valores ingresados fueron: <?php echo $espanol ?> y 
            <?php echo $ingles ?></p>

    <?php
        unset($_GET);
    } else {
    ?>

        <p>No se ingresó ningún valor.</p>
        
    <?php       
    }
    ?>

    <a href = "ejercicio-2_manda.php">Volver al inicio</a>
</body>
</html>