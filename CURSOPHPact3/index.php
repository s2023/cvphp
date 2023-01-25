<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
    <?php
        /* ┌───────────────────────────────────────────────┐
         * │ DATOS DEL DESARROLLADOR:                      │
         * │ Nombre: Juan Sebastian Rivas Agudelo          │
         * │         │
         * │ Programa de formación: Desarrollo Web con PHP │
         * │ Evidencia: Taller “Uso de funciones”          │
         * └───────────────────────────────────────────────┘
         */

        /* Llamé el archivo BibliotecaAct3.php en el que se encuentra la función
         * operaciones
         */
        require_once 'BibliotecaAct3.php';

        /* Llamo la función operaciones que está en el archivo biblioteca.php y
         * le puse valores a los parámetros (tuve que colocar echo porque de lo
         * contrario no aparecía nada)
         */
        echo operaciones(50, 20, "BibliotecaAct3");
    ?>
</body>
</html>
