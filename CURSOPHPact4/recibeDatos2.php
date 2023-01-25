<!DOCTYPE html>
<html> 
    <head> 
        <title>Ejercicio 3 (recibe los datos de HTML)</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <p>Hola <?php echo $_POST['nombre']; ?>.</p>

        <p>Sus datos personales son:</p>

        <?php
            $hoy =  date('Y-m-d');
            /* Me arroja los años que cumple en este año así no los haya
             * cumplido (CORREGIR CUANDO PUEDA)
             */
            $edad = $hoy - $_POST['fecha_nacimiento'];
        ?>

        <ul>
            <li>Usted tiene <?php echo $edad; ?> años.</li>
            <li>Su número de teléfono es: 
                <?php echo $_POST['telefono']; ?>.</li>
            <li>Su e-mail es: <?php echo $_POST['email']; ?></li>
            <li>Su estado civil es: <?php echo $_POST['estadoCivil']; ?>.</li>
            <li>Usted vive en el departamento de: 
                <?php echo $_POST['departamento']; ?>.</li>
        </ul>

        <p>
            <?php
                if (isset($_POST['hijos'])) {
                    if ($_POST['hijos'] === 'on') {
                        echo "Esperamos que sus hijos estén muy bien.";
                    }
                }
            ?>
        </p>
        <?php echo "<a href = 'formularioHTML.php'>Volver al inicio</a>"; ?>
    </body>
</html>