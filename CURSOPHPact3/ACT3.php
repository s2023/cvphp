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
        //EJERCICIO 1
        /* En este programa se presenta el funcionamiento de una función
         * simple, creada por el usuario
         */
        /* Intencionalmente se escribió primero el llamado a la función antes que 
         * su definición con el fin de demostrar que no importa donde se haga
         * el llamado de una función, si antes o después de si declaración
         */
        imprimeTabla1();
        /* La función imprimeTabla() genera una tabla HTML de 3 filas por 4 
         * columnas con una fila de encabezado que contiene los títulos de
         * las columnas, la función no recibe argumentos ni devuelve valores
         */
        function imprimeTabla1() {
        ?>
            <table border ="1">
                <thead>
                    <td>Nombre</td>
                    <td>Direcci&oacute;n</td>
                    <td>Tel&eacute;fono</td>
                    <td>Fecha de Nacimiento</td>
                </thead>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
            </table>
        <?php
        }
           imprimeTabla1();
        ?>
        <BR></BR>
        
        <?php
        //EJERCICIO 2
        /* En este programa se presenta el funcionamiento de una función
         * que recibe argumentos
         */
        /* La función imprimeTabla() genera una tabla HTML de n filas donde
         * la cantidad de filas está definida por el argumento $filas
         * pero el argumento tiene un valor predefinido, así que si el 
         * usuario de la función no da un valor se generará una tabla con 3 
         * filas por 4 columnas con una fila de encabezado que contiene los títulos de
         * las columnas, la función no recibe argumentos ni devuelve valores
         */
        function imprimeTabla($filas = 3) {
            ?>
            <table border ="1">
                <thead>
                <td>Nombre</td>
                <td>Direcci&oacute;n</td>
                <td>Tel&eacute;fono</td>
                <td>Fecha de Nacimiento</td>
            </thead>
            <?php
            /* Mediante un ciclo for se pueden crear la cantidad de filas
             * que se requieran con base en el argumento $filas, como puede
             * verse esto hace el código más eficiente ya que se requieren menos
             * líneas de código que en el ejemplo anterior que hacia algo similar
             */
            for ($i = 1; $i <= $filas; $i++) {
                ?>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    /* Se llama la función sin poner argumento por lo que se tomará el valor 
     * predefinido 3 que será el número de filas de la tabla
     */
    imprimeTabla();
    /* Se llama la función poniendo como argumento 5 que sepa el número de 
     * filas de la tabla
     */
    imprimeTabla(5);
    ?>
        
         <BR></BR>
       <?php
       //EJERCICIO 3
        /* En este programa se presenta el funcionamiento de una función
         * que devuelve datos luego de su ejecución
         */
        /* encuentraValorArreglo() es una función que recibe un arreglo
         * y un valor para buscar el valor dentro del arreglo enviado
         * Esta función ya esta programada en la biblioteca de PHP pero
         * la codificamos aqui a modo de ejemplo de una función que retorna 
         * valores, al función retorna TRUE si encuentra el valor en el arreglo
         * y FALSE si no lo encuentra 
         */
        function encuentraValorArreglo($arreglo, $valorBuscado) {
            foreach ($arreglo as $valor) {
                if ($valor == $valorBuscado) {
                    return TRUE;
                }
            }
            return FALSE;
        }
        // Se declara un arreglo con datos para poder buscar en el
        $arregloAnimales = array(
            "Perro",
            "Gato",
            "Liebre",
            "Conejo",
            "Vaca",
            "Lobo",
            "Abeja",
            "Oveja",
            "Pollo"
        );
        //Se declaran dos variables con datos a ser buscados en el arreglo
        $animalQueEsta = "Vaca";
        $animalQueNoEsta = "Leon";
        /* Se usa el valor retornado por la variable como expresión para
         * un condicional en este caso el valor a buscar si está dentro del 
         * arreglo por lo tanto la función retornará TRUE lo que hará que
         * la condición se cumpla
         */
        if (encuentraValorArreglo($arregloAnimales, $animalQueEsta)) {
            echo "$animalQueEsta si se encuentra en el arreglo <br />";
        }
        /* En este caso el valor a buscar no estará en el arreglo, por ello
         * debe utilizarse una negación pues la función retornará FALSE
         * que al ser negado se convierte en TRUE y hace que la condición
         * se cumpla
         */
        if (!encuentraValorArreglo($arregloAnimales, $animalQueNoEsta)) {
            echo "$animalQueNoEsta no se encuentra en el arreglo";
        }
        ?> 
         <BR></BR>
        <?php
        //EJERCICIO 4
        /* En este programa se muestra cómo se pueden usar bibliotecas de
         * funciones creadas por el usuario, solo hace falta recopilar
         * las funciones en un archivo .php y luego incluirlo o requerirlo
         * dentro del archivo donde se van a requerir las funciones
         */
        
        /* La función require_once() permite llamar el archivo en este caso
         * puesto que está dentro de la misma carpeta se hace de la siguiente 
         * manera
         */
        require_once './ejemplo_4_Biblioteca.php';
        
        /* Vamos a inicializar un arreglo que contiene los datos de un listado
         * de personas
         */
        $listadoAmigos = array(
            array(
                "nombre" => "Juan Perez",
                "direccion" => "Clle. 3 # 25 - 40",
                "telefono" => "2345674",
                "fechaNacimiento" => "12/03/2000",
                "colorFavorito" => "Azul"
            ),
            array(
                "nombre" => "Lola Fuentes",
                "direccion" => "Cra. 4 # 12 - 18",
                "telefono" => "2345674",
                "fechaNacimiento" => "07/12/1980",
                "colorFavorito" => "Verde"
            ),
            array(
                "nombre" => "Pablo Reyes",
                "direccion" => "Cra. 16 # 125 - 15",
                "telefono" => "3456271",
                "fechaNacimiento" => "03/07/1987",
                "colorFavorito" => "Amarillo"
            ),
        );
        
        /* Lo que se requiere es mostrar todos los datos del arreglo
         * ordenados en una tabla pero que además el color favorito se busque
         * en un arreglo que contenga el color  su significado y que en 
         * una columna de la tabla se ponga el significado del color
         * la siguiente función hace todo eso, pero no está dentro de este
         * mismo archivo sino en el archivo ejemplo_4_Biblioteca.php
         * que fue requerido al inicio
         */
        muestraListadoTabla($listadoAmigos);
        ?>
        <BR></BR>
        
        <?php
        // EJERCICIO 3 CON BIBLIOTECA
        require_once 'bibliotecaejercicio3.php';

        $arreglo = array(
            array(
                "Mario Díaz",
                "30 años",
                "Medellín"
            ),
            array(
                "María Caño",
                "23 años",
                "Mosquera"
            ),
            array(
                "Inty Cajamarca",
                "34 años",
                "Bogotá"
            )
        );

        tabla($arreglo);
    ?>
        <BR></BR>
        
        <p>
        <h3>Ejemplo de la funci&oacute;n date()</h3>
        <?php
        //EJERCICIO 5
        /* En este programa se muestra el uso de algunas funciones
         * de la biblioteca de PHP
         */
        /* La función date() devuelve la fecha y hora del sistema
         *  requiere un parámetro de tipo cadena que indica la forma en la 
         * que se debe mostrar la información devuelta
         * OJO CON ESTO GONORREA LA FECHA Y HORA
         */ 
        echo date('D, d M Y H:i:s');
        ?>
    </p>
    <p>
    <h3>Ejemplo de la funci&oacute;n print_r()</h3>
    <?php
    /* Se inicializa un arreglo para poder utilizar algunas funciones
     * que nos permiten procesarlos
     */
    $arregloAnimales = array(
        "Perro",
        "Gato",
        "Liebre",
        "Conejo",
        "Vaca",
        "Lobo",
        "Abeja",
        "Oveja",
        "Pollo"
    );
    /* La función print_r() muestra en el navegador todo el 
     * contenido del arreglo
     */
    print_r($arregloAnimales);
    ?>
</p>
<p>
<h3>Ejemplo de la funci&oacute;n asort()</h3>
<?php
/* La función asort() ordena el arreglo que se pasa como parámetro
 * pero no usa la instrucción return, ya que recibe el arreglo como
 * parámetro por referencia, es decir, que el arreglo ordenado
 * queda almacenado en el mismo arreglo que se envió, por esa razón si
 * volvemos a imprimir el mismo arreglo se muestra ahora ordenado,
 * pero podremos notar que la función solo reordena las posiciones
 * de los elementos en el arreglo sin modificar los índices
 */
asort($arregloAnimales);
print_r($arregloAnimales);
?>
</p>
<p>
<h3>Ejemplo de la funci&oacute;n isset()</h3>
<?php
/* La función isset() evalúa si una variable ya ha sido
 * inicializada y devuelve un valor lógico, es supremamente
 * útil para evitar errores lógicos
 */
$a = "Si estoy inicializada";
if (isset($a)) {
    echo "La variable \$a si está inicializada <br />";
}
if (!isset($b)) {
    echo "La variable \$b no esta inicializada";
}
?>
</p>
          <BR></BR>
    <?php
        $bandasConM = array(
            "Meshuggah",
            "Melvins",
            "Metallica",
            "Marillion",
            "Megadeth",
            "Montrose",
            "Malón"
        );

        print_r($bandasConM[2]);
        
    ?>    
      <BR></BR>    
        
        
        
    </body>
</html>
