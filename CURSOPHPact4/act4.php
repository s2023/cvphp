<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta charset="utf-8">
    <title>Actividad 4</title>
</head>
<body>
    <?php
        /* ┌────────────────────────────────────────────────────────────┐
         * │ DATOS DEL DESARROLLADOR:                                   │
         * │ Nombre: Juan Sebastian Rivas Agudelo                       │
         * │                                          │
         * │ Programa de formación: Desarrollo Web con PHP              │
         * │ Evidencia: Taller  “Uso de formularios para transferencia” │
         * └────────────────────────────────────────────────────────────┘
         */

        //LLamo los archivos necesarios para la ejecución de la aplicación
        require "accion.php";
        require "escenario.php";            
    ?>

    <img src="logo.png">

    <!-- Creo una tabla para el escenario -->

    <table>
        <tr>
            <td>                
                <?php
                    //Pregunto si se agregaron valores al escenario
                    if(isset($_REQUEST['enviar'])) {
                        $fila = $_POST['fila'];
                        $puesto = $_POST['puesto'];
                        $accion = $_POST['accion'];
                        $stringEscenario = $_POST['escenario'];
                        /* El string generado en el input oculto se convierte en
                         * una matriz
                         */
                        $count = 0;
                        for($i = 0; $i < 5; $i++) {
                            for($j = 0; $j < 5; $j++) {
                                $count = 5 * $i + $j;
                                /* Cada captura cada elemento de la matriz extrayendo
                                 * dicho elemento del String
                                 */
                                $escenario[$i][$j] =
                                substr($stringEscenario, $count, 1);
                            }
                            $count = 0;
                        }

                        $escenario = accion($fila, $puesto, $accion, $escenario);
                        escenario($escenario);
                    } else {
                        /* Lleno el escenario si no se han llenado valores
                         * definiendo la matriz $escenario como la matriz vacía
                         * que está en el archivo "escenarioVacio.php"
                        */
                        $escenario = $escenarioVacio;
                        escenario($escenario);
                    }
                ?>
            </td>
            <td>
                <?php
                    //Incluyo el formulario
                    include "formulario.php";
                ?>
            </td>
        </tr>        
    </table>
    <?php echo "<br /><a href = 'index.php'>Volver al inicio</a>";?>
</body>
</html>
