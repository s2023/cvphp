<!DOCTYPE html>
<html> 
<head>
    <title>Actividad 4</title>
    <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
</head>
<h1 align ="center">Actividad 4</h1>
    <?php     
    //EJEMPLO 1 cambiacolorfondo
    /* En esta programa se van a usar los vínculos para pasar datos a través de 
     * la URL con PHP, para este caso los datos se envían a la misma página
     */
    /* En la siguiente rutina se va a evaluar si la variable del sistem $_GET ya 
     * contiene datos, si es asi se construye la etiqueta de apertura del objeto
     * body de la página web con la información de color que haya llegado 
     * por la URL, se debe recordar que la variable $_GET es la que 
     * recibe los datos cuando se envían a través de una URL
     */
    if (isset($_GET['colorFondo'])) {
        /* Se almacena el dato que llega desde la URL en la variable
         * $colorFondo, el indice en el que llega el dato es el nombre de la
         * variable que se puso en el hipervínculo
         */
        $colorFondo = $_GET['colorFondo'];
        echo "<body bgcolor = '$colorFondo'>";
        /* Se eliminan los datos de la variable $_GET para que la condición 
         * anterior no se cumpla cuando se vuelva a cargar la página
         */
        unset($_GET);
        /* Se construye un hipervínculo normal que devuelve al usuario a la 
         * página original, que en este caso es la misma pero se va a cargar de 
         * nuevo con el "menú" de colores
         */
        echo "<a href = 'index.php'>Volver al inicio</a>";
    } else {
        /* Si la variable $_GET aún no se ha inicializado se construye la 
         * página con los hipervínculos necesarios para poder pasar la información
         * cada hipervínculo lleva una variable con un valor diferente, que
         * es la palabra del color en inglés para poder usarla al construir el 
         * objeto body en la parte anterior del condicional
         */
        echo "<body>";
        echo "<h3>Al dar clic en cualquiera de los siguientes hiperv&iacute;nculos"
        . " podr&aacute;s cambiar el color de fondo de la p&aacute;gina</h3>";
        echo "<a href = 'index.php?colorFondo=yellow'>Fondo Amarillo</a>"
        . "<br />";
        echo "<a href = 'index.php?colorFondo=blue'>Fondo Azul</a>"
        . "<br />";
        echo "<a href = 'index.php?colorFondo=red'>Fondo Rojo</a>"
        . "<br />";
    }
    ?>
<BR></BR>
    <?php
        //EJERCICIO 1
        if (isset($_GET['fuente'])) {        
            $fuente = $_GET['fuente'];

            echo "<body style='font-family: $fuente'>";
        ?>

            <p>El tipo de letra de esta página fue cambiado a 
                <strong><?php echo $fuente ?>.</strong></p>

        <?php
            unset($_GET);
        ?>        
            <a href = 'index.php'>Volver al inicio</a>

        <?php
        } else {
        ?>
            <body>

            <h3>Al dar clic en cualquiera de los siguientes hipervínculos 
                podrás cambiar la fuente de la página</h3>

        <?php
            $fuentes = array(
                'Georgia',
                'Garamond',
                'Tahoma',
                'Comic Sans Ms'
            );

            foreach ($fuentes as $valor) {
                echo "<a href='index.php?fuente=$valor'>$valor</a><br>";
            }        
        }
    ?>
<BR></BR>
    <?php
    //Ejemplo 1 Seleccionar Numero
        /* En este programa también se van a usar hipervínculos para enviar
         * información a la misma página, pero en este caso los hipervínculos se
         * van  a construir dinámicamente usando un ciclo for
         */
        if (isset($_GET['numeroSeleccionado'])) {
            $numeroSeleccionado = $_GET['numeroSeleccionado'];
            echo "<p>Usted ha seleccionado el n&uacute;mero: $numeroSeleccionado"
                    . "<br />";
            unset($_GET);
            echo "<a href = 'index.php'>Volver al inicio</a>";
        } else {
            echo "<h3>Por favor seleccione uno de los n&uacute;meros</h3>";
            for ($i = 1; $i <= 10; $i++) {
                /* Como puede verse se usa el índice del ciclo for para
                 * construir los hipervínculos de forma dinámica se van a crear
                 * diez hipervínculos cada uno con un valor numérico diferente 
                 * que se transmiete en la variable numeroSeleccionado
                 */
                echo "<a href = 'index.php?numeroSeleccionado=$i'>"
                . "$i</a><br />";
            }
        }        
    ?>
<BR></BR>
    <?php
    //ejemplo 2 recibe y selecciona numero
    echo "<a href = 'recibeNumero.php'>"
            . "Recibe numero"."</a><br />";
    ?>
<BR></BR>   
    <?php
    //EJERCICIO 2
    echo "<a href = 'ejercicio-2_manda.php'>"
            . "Ejercicio 2"."</a><br />";
    ?>
<BR></BR>
    <?php
    //EJERCICIO 3
    echo "<a href = 'formularioHTML.php'>"
            . "Ejercicio 3"."</a><br />";
    ?>
<BR></BR>
    <?php
    //EJERCICIO 4
    echo "<a href = 'Login.php'>"
            . "Ejercicio 4"."</a><br />";
    ?>
<BR></BR>
    <?php
    //EJERCICIO 4
    echo "<a href = 'act4.php'>"
            . "Actividad 4 FINAL"."</a><br />";
    ?>
</body>
</html>
