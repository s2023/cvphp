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
        // MI PRIMER PROYECTO PHP
        /* Creado por:
         * Juan Sebastian Rivas Agudelo
         * 
         * Desarrollo en PHP. SENA. 2021.
         */
            echo "<h1>Este es mi primer proyecto PHP<h1/>"
        ?>

        <h3>Nombre Empresa: </h3>
        <?php
            echo "Computadores Andes<br/>"; //Datos de la empresa
        ?>
        <h3>Servicios:</h3>
        <?php
            echo "Venta de Computadores, impresoras, celulares y consolas de"
            . " videojuegos.<br />"; //Servicios
            echo "Mantenimiento de equipos de cómputo, celulares, impresoras y"
            . " consolas de videojuegos.<br />";
            echo "Compra de equipos usados.<br />"; #Servicios
        ?>
        <h3>Edad empresa:</h3>
        <?php
            echo "20 a&ntildeos"; //Tercer segmento del mismo programa   
        ?>
        <h3>Tel&eacutefono:</h3>
        <?php
            echo "(+57)3194195464";
        ?>
        <h3>Direcci&oacuten:</h3>
        <?php
            echo "<b>Cr.</b> 34 <b>No.</b> 54 - 25 Bogot&aacute D.C., Colombia.";
        ?>
        <br><br/>
         <h3>Ejercicios:</h3>
        <?php
            echo "Ella dijo \"buenos d&iacute;as\" sarc&aacute;sticamente.<br/>";
        ?>
        <?php
        $a = 3;
        $b = 5;
        $c = $b;
            echo "La suma es igual a " . ($a + $c) . ".";
        ?>
        
         <h3>Nombres: </h3>
        <?php
           /* Este programa se usará para tratar el tema de variables
            * se van a declarar e inicializar variables con diferentes tipos
            * de datos y su valor será impreso en el navegador
            */
        
            /* Aunque las dos variables siguientes tienen la misma palabra como
             * nombre, son totalmente diferentes pues la primera empieza con N
             * y la segunda con n, lo que demuestra que PHP es sensible a las 
             * mayúsculas y minúsculas, ambas variables son inicializadas con
             * datos tipo String lo cual hace que el tipo que tomas es String
             */
            $Nombre = 'Luis'; 
            $nombre = 'Pablo';
            echo "$Nombre $nombre <br />";
        ?>
        <h3>Apellidos:</h3>
        <?php
            $apellidosUsuario_1 = 'Perez Jiménez'; //Otra variable con tipo String
            echo "$apellidosUsuario_1 <br />"; 
        ?>
        <h3>Edad:</h3>
        <?php
            $edad = 26; //Variable con tipo de dato Integer           
            echo "$edad <br />";           
        ?>
        <h3>Estatura:</h3>
        <?php
            $estatura = 1.78; //Variable con tipo de dato Float          
            echo "$estatura <br />";           
        ?>
        <h3>Tel&eacute;fono:</h3>
        <?php
            $telefono = '+57 (1) 323 12 00';
            echo "$telefono <br />"; #            
        ?>  
        <h3>Direcci&oacute;n:</h3>
        <?php
            /* La siguiente variable va a ser declarada pero no inicializada
             * el intérprete la tomará como tipo de dato NULL y este será
             * el valor que va a contener, dependiendo de cómo esté configurado
             * el intérprete puede mostrar un error de tipo E_NOTICE
             */
            $direccion = 'Arg';//Variable declarada pero no inicializada toma el tipo NULL
            echo "$direccion";         
        ?>
        
        <p><b>El valor de la compra es: $</b>
            <?php
                /* En este programa se tiene la variable $valor la cual se 
                 * utiliza en varios segmentos del mismo código pudiendo
                 * modificar su contenido debido a que su ámbito se mantiene
                 * dentro del mismo archivo en el que fue declarada
                 */
                $valor = 1000; //Declaración e inicialización de $valor
                echo "$valor";
            ?>
        </p>
        <p><b>M&aacute;s el IVA: $</b>
            <?php
                $valor = $valor * 1.16; //Modificación de $valor
                echo "$valor";
            ?>
        </p>
        <p><b>M&eacute;nos el descuento de 5%: $</b>
            <?php
                $valor = $valor * 0.95; //Modificación de $valor
                echo "$valor";
            ?>
        </p> 
          <h3>Ejemplo del uso de una variable predefinida ($_SERVER): </h3>
        <p>
            <b>Software del servidor: </b>
            <?php
            /* En este segmento se muestra el ejemplo del uso de una variable 
             * predefinida 
             */
            echo $_SERVER['SERVER_SOFTWARE'];
            ?>
        </p> 
        <?php
        
        /* En este programa se declaran e inicializan diferentes tipos de
         * variables para dar un ejemplo de los diferentes tipos de datos
         * que se manejan en PHP         * 
         */
        $nombreCompleto = 'Juan Pablo Casas Casas';//tipo de dato String
        /*Como puede verse a continuación las fechas se almacenan como tipo
          de datos string*/
        $fechaIngreso = '12/07/2005'; //Tipo de dato String
        $edad = 26; //Tipo de dato entero
        $estatura = 1.68; //Tipo de dato coma flotante
        $salario = 1.4e6; //Tipo de dato coma flotante
        ?>

        <p>
            <?php
            echo "El se&ntilde;or $nombreCompleto trabaja con la empresa "
                    . "Sysdevelopment desde el d&iacute;a $fechaIngreso, "
                    . "su edad es $edad a&ntilde;os, su estatura "
                    . "es $estatura mts. y su salario es \$$salario".".";
            ?>
        </p>  
         <h3>Ejemplo de arreglo con llaves num&eacute;ricas</h3>
        <?php
        
        /* En este programa se va a especificar la forma de
         * declarar arreglos y acceder a la información que contiene
         */
        //Arreglo con llaves numéricas
        $listadoProductosCodigoNombre = array(
            1234 => "Arroz x libra",
            2341 => "Frasco aceite x 1000 mls.",
            2345 => "Mantequilla x 250 grs."
        );
        ?>
        <p>
            <?php
            $codigoProducto = 1234;
            echo "El producto con c&oacute;digo $codigoProducto es: "
            . "$listadoProductosCodigoNombre[$codigoProducto]";
            ?>
        </p> 
        <h3>Ejemplo de arreglo con llaves alfanum&eacute;ricas</h3>
        <?php
        //Arreglo con llaves alfanuméricas
        $listadoDiasActividad = array(
            "lunes" => "caminar",
            "martes" => "sentadillas",
            "miercoles" => "flexiones",
            "jueves" => "abdominales",
            "viernes" => "estiramiento",
            "sabado" => "saltar lazo",
            "domingo" => "futbol"
        );
        ?>
        <p>
            <?php
            $dia = 'miercoles';
            echo "La actividad para el d&iacutea $dia es: "
            . "$listadoDiasActividad[$dia]";
            ?>
        </p> 
        <?php
        //Arreglo con llaves numéricas autodefinidas
        $listadoEstudiantes = array(
            "Ardila, Pablo",
            "Benitez, Nancy",
            "Cepeda, Juan",
            "Castro, Luis",
            "Soto, Carlos"
        );
        ?>
        <h3>Ejemplo de arreglo con llaves num&eacute;ricas autodefinidas</h3>
        <p>
        <?php
            echo "El primer estudiante de la lista es: "
            . "$listadoEstudiantes[0] <br />";
            echo "El segundo estudiante de la lista es: "
            . "$listadoEstudiantes[1] <br />";
            echo "El tercer estudiante de la lista es: "
            . "$listadoEstudiantes[2] <br />";
            echo "El cuarto estudiante de la lista es: "
            . "$listadoEstudiantes[3] <br />";
            echo "El quinto estudiante de la lista es: "
            . "$listadoEstudiantes[4] <br />";
        ?>
        </p> 
        
        <h3>Ejercicio 4</h3>
        <h4>Directorio</h4>
        
        <?php
            $contactos = array (//ARRAY MULTIDIMENSIONAL
            array("Andres Fandiño","KR 15 # 24- 25",3218394758,"15/03/93"),
            array("Camila Gutierrez","CL 34 # 56- 36",3154687264,"18/06/97"),
            array("Mauricio López","DG 46 # 29- 31",3184565758,"24/11/90"),
            );
        ?>
        <?php
            echo "Nombres, Direcci&oacute;n, Tel&eacute;fono, Fecha de cumpleaños <br>";
            echo $contactos[0][0].", ".$contactos[0][1].", ".$contactos[0][2].
                    ", ".$contactos[0][3].".<br>";
            echo $contactos[1][0].", ".$contactos[1][1].", ".$contactos[1][2].
                    ", ".$contactos[1][3].".<br>";
            echo $contactos[2][0].", ".$contactos[2][1].", ".$contactos[2][2].
                    ", ".$contactos[2][3].".<br>";
        ?>
        
        <p>
        <?php
            /* En este programa puede verse el proceso de declaración y
             * uso de una constante
             */
            define('PI', 3.1416); //Declaración de la constante
            echo 'El n&uacute;mero Pi es: ' . PI; //Uso de la constante
        ?>
            
        <h3>Ejemplo de expresi&oacute;n con operador aritm&eacute;tico:</h3>
        <p>
        <?php
            /* En  este programa se presenta el uso de diferentes tipos de 
             * operadores en expresiones correctamente formuladas
             */
            $nombreTrabajador = 'Jose Pablo Caro Ospina';
            //Se usa el operador de asignación = para darle valor a $salario
            $salario = 1.2e6;
            $porcentajeReteFuente = 0.011;
            //Se usa el operador aritmético * para multiplicar
            $reteFuente = $salario * $porcentajeReteFuente;
            $totalDevengado = $salario * (1 - $porcentajeReteFuente);
            echo "El trabajador $nombreTrabajador tiene un salario de: \$$salario"
            . ", se le hace un descuento por retenci&oacute;n en la fuente de: "
            . "\$$reteFuente, el salario total que devenga el trabajador"
            . "es de: \$$totalDevengado";
        ?>
        </p> 
        <h3>Ejemplo de expresi&oacute;n con operador de asignaci&oacute;n: </h3>
        <p>
            <?php
            $manzanas = 3;
            $regalo = 4;
            /* Se usa el operador de asignación += para sumar el valor de una
             * variable a otra
             */
            echo "Pablo tiene $manzanas manzanas, Mar&iacute;a le regala $regalo "
            . "manzanas, por lo tanto ahora Pablo tiene "
            . ($manzanas += $regalo) . " manzanas";
            ?>
        </p>  
        <h3>Ejemplo de expresi&oacute;n con operador de incremento: </h3>
        <p>
            <b>Usando pre-incremento: </b>
            <?php
            $edad = 21;
            // Se usa el operador de pre-incremento ++
            echo "El a&ntilde;o pasado Nancy Ten&iacute;a $edad a&ntilde;os, "
            . "puesto que este a&ntilde;o ella ya cumpli&oacute; ahora "
            . "tiene " . ++$edad . " a&ntilde;os <br>";
            ?>
            <b>Usando post-incremento: </b>
            <?php
            $edad = 21;
            echo "El a&ntilde;o pasado Nancy Ten&iacute;a " . $edad++
            . " a&ntilde;os, puesto que este a&ntilde;o ella ya "
            . "cumpli&oacute; ahora tiene " . $edad . " a&ntilde;os";
            ?>
        </p>
            
        <h3>Ejemplo de asignaci&oacute;n de variables por valor:</h3>
        <p>
            <?php
            /* En este programa se muestra como al asignar el contenido de
             * una variable a otra por valor las modificaciones de una
             * variable no afectan a la otra
             */
            $edad = 6;
            $edadFutura = $edad; //Se asigna el valor de $edad a $edadFutura
            $edadFutura += 4; //Se modifica el valor de $edadFutura
            echo "En este momento Pablo tiene $edad a&ntilde;os, cuando pasen"
            . " 4 a&ntilde;os Pablo tendr&aacute; $edadFutura a&ntilde;os";
            ?>
        </p> 
        <h3>Ejemplo de asignaci&oacute;n de variables por referencia:</h3>
        <p>
            <?php
            /* En este caso se muestra como al asignar el contenido de
             * una variable a otra por referencia las modificaciones de una
             * variable si afectan a la otra
             */
            $edad = 6;
            $edadFutura = &$edad; //Se asigna la REFERENCIA a $edad en $edadFutura
            echo "- En este momento Pablo tiene $edad a&ntilde;os <br /> ";
            /* A continuación se le va a asignar a $edadFutura el valor de lo
             * que esta contenga más 4, pero como en $edadFutura no hay un valor
             * sino una referencia lo que va a pasar entonces es que el valor
             * de $edad se va a modificar sumándole 4
             */
            $edadFutura += 4; 
            /* Como puede verse en la siguiente línea no se utiliza la
             * variable $edadFutura sino que se usa $edad y aunque esta
             * no se ha modificado directamente sino por referencia el nuevo
             * valor será el que contenía antes + 4
             */
            echo "- Cuando pasen 4 a&ntilde;os Pablo tendr&aacute; $edad a&ntilde;os";
            ?>
        </p>
        
        <h3>Ejemplo de codicionales anidados:</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden usar las estructuras
             * condicionas del PHP
             */
            $a = 3;
            $b = 4;
            if ($a >= 3) {
                echo "La variable \$a es mayor o igual que 3 <br />";
                if ($b >= 4) {
                    echo "La variable \$b es mayor o igual que 4";
                }
            }
            ?>
        </p> 
        <h3>Ejemplo de condicionales multiples:</h3>
        <p>
            <?php
            $a = 3;
            if ($a > 3) {
                echo "La variable \$a es mayor que 3 <br />";
            } elseif ($a < 3) {
                echo "La variable \$a es menor que 3 <br />";
            } else {
                echo "La variable \$a es igual a 3 <br />";
            }
            ?>
        </p> 
        
        <h3>Ciclo while</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden los ciclos
             * while y do-while
             */
            $a = 5; //Se inicializa una variable de control
            while ($a >= 1) { //Se pone la condición de finalización
                echo "$a <br />"; //Se ejecuta una rutina
                $a--; //Se modifica la variable de control
            }
            ?>
        </p> 
        <h3>Ciclo do-while</h3>
        <p>
            <?php
            /* Este programa solo mostrará el número 6 ya que
             * no se devuelve la variable $a a un valor menor que 5 por lo tanto
             * se muestra el ultimo valor luego de la ejecución del ciclo 
             * anterior, se evalua la condición y puesto que no se cumple no se
             * itera de nuevo
             */
            do {
                echo "$a <br />"; //Se ejecuta una rutina
                $a++; //Se modifica la variable de control
            } while ($a <= 5)//Se pone la condición de finalización
            ?>
        </p>
        
        
        <h3>Ciclo for</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden los ciclos
             * for y foreach
             */
            for ($i = 1; $i <= 6; $i++) { //Se ponen todas las condiciones del ciclo
                echo "$i <br />"; //Se ejecuta una rutina
            }
            ?>
        </p> 
        <h3>Ciclo foreach</h3>
        <p>
            <?php
            /* Puesto que el ciclo foreach fue creado para recorrer arreglos
             * lo primero que se requiere es tener un arreglo con información
             */
            $arregloAnimales = array(
                "Perro",
                "Gato",
                "Conejo",
                "Liebre",
                "Tortuga",
                "Gallina"
            );
            foreach ($arregloAnimales as $animal) {
                echo "$animal <br />";
            }
            ?>
        </p>
        
        <!-- ejercicio 2 david -->
         <?php
        // TALLER: USO DE ARREGLOS
        /* Creado por:
         * Juan Sebastian Rivas Agudelo
         * 1018446593
         * Desarrollo en PHP. SENA. 2021.
         */
        echo "<div align=\"center\"><h1>Taller: uso arreglos<h1/></div>"
        ?>

        
        <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de<br>cumpleaños</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $directorio = array(
                    //Fila 0
                    array(
                        'Diego Cepeda',
                        'Calle 24 # 40-60',
                        '3115674532',
                        '23 de febrero'
                    ),
                    //Fila 1
                    array(
                        'Melissa Pérez',
                        'Carrera 23 # 76-56',
                        '3456787',
                        '4 de julio'
                    ),
                    //Fila 2
                    array(
                        'Armando Caminos',
                        'Transversal 23B # 45-76',
                        '3135648734',
                        '30 de noviembre'
                    )
                );

                //Este ciclo recorre cada arreglo de $directorio
                foreach ($directorio as $arreglo) { 
                    //Apertura de fila
                    echo "<tr>";

                    //Este ciclo recorre cada elemento del sub arreglo
                    foreach ($arreglo as $dato) { 
                        //Apertura de columna
                        echo "<td>";

                        //Se escribe el valor de cada elemento del sub arreglo
                        echo $dato;

                        //Cierre de columna
                        echo "</td>";
                    }

                    //Cierre de fila
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
        
        <!-- act 2 david -->
        
        <h1>Directorio</h1>

    <table border="2" width="70%" cellspacing="3">
        <thead>
            <tr>
                <th bgcolor='#0080C0'>Nombre</th>
                <th bgcolor='#0080C0'>Dirección</th>
                <th bgcolor='#0080C0'>Teléfono</th>
                <th bgcolor='#0080C0'>Fecha de<br>cumpleaños</th>
                <th bgcolor='#0080C0'>Color<br>favorito</th>
                <th bgcolor='#0080C0'>Significado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                /* Creo una función para no tener que repetir líneas de código
                 * al asignarle el valor al significado del color. Le agrego el
                 * argumento de la variable $color que más adelante será
                 * definida dentro de los subarreglos
                 */
                function significadoColor($color) {
                    //Arreglo de los colores
                    $colores = array(
                        'Azul' => 'Poder y sabiduría',
                        'Verde' => 'Vida y naturaleza',
                        'Rojo' => 'Fortaleza',
                        'Negro' => 'Resistencia'
                    );

                    /* En este punto yo lo que hice fue crear la variable
                     * para el significado del color. Verifiqué si la
                     * llave almacenada en la variable $color existía en el
                     * arreglo $colores. El '?' me verifica si la llave
                     * existe en el arreglo y le asigno el valor de esa
                     * llave a la variable $significado; y los ':' me dice
                     * que no existe la llave en el arreglo, así que le
                     * asigno el valor de 'No se encuentra el significado.'
                     */
                    $significado = array_key_exists($color, $colores) 
                                   ? $colores[$color] 
                                   : 'No se encuentra el significado.';
                    
                    /* Le digo que me arroge el valor de $significado para que
                     * después se escriba al recorrer el ciclo foreach
                     */
                    return $significado;
                }

                //Arreglo que se va a llenar en la tabla
                $directorio = array(
                    array(
                        'Diego Cepeda',
                        'Calle 24 # 40-60',
                        '3115674532',
                        '23 de febrero',
                        //Creé una variable para el color
                        $color = 'Verde',
                        /* Llamo a la función significadoColor con el argumento
                         * de la variable $color que está definida en la línea
                         * de arriba
                         */
                        significadoColor($color)
                    ),

                    array(
                        'Melissa Pérez',
                        'Carrera 23 # 76-56',
                        '3456787',
                        '4 de julio',
                        $color = 'Azul',
                        significadoColor($color)
                    ),

                    array(
                        'Armando Caminos',
                        'Transversal 23B # 45-76',
                        '3135648734',
                        '30 de noviembre',
                        $color = 'Negro',
                        significadoColor($color)
                    )
                );
                

                //Este ciclo recorre cada arreglo de $directorio
                foreach ($directorio as $arreglo) { 
            ?>

            <!-- Apertura de fila -->
            <tr>

                <?php
                    //Este ciclo recorre cada elemento del sub arreglo
                    foreach ($arreglo as $dato) { 
                ?>
            
                <!-- Apertura de columna -->
                <td>

                    <?php
                        //Se escribe el valor de cada elemento del sub arreglo
                        echo $dato;
                    ?>

                <!-- Cierre de columna -->
                </td>

                <?php
                    }
                ?>

            <!-- Cierre de fila -->
            </tr>

            <?php
                }
            ?>
        </tbody>
    </table>
    </body>
</html>
