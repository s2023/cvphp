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
        <h3 align ="center">Actividad 2 <br> Taller: Uso de Arreglos</h3>
        <h4 align ="center">Directorio</h4>
        <?php
           // TALLER: USO DE ARREGLOS
        /* Creado por:
         * Juan Sebastian Rivas Agudelo
         * 
         * Desarrollo en PHP. SENA. 2021.
         */
        
        //Utilizaré un arreglo bidimencional
            $colores = array(       
                        'Azul' => 'Racionalidad',
                        'Verde' => 'Vida y naturaleza',
                        'Rojo' => 'Poder',
                        'Negro' => 'Conocimiento',
                        'Amarillo' => 'Sabiduría',
                        'Naranja' => 'Creatividad',
                        'Violeta' => 'Riqueza',
                        'Rosado' => 'Inocencia',
                        'Blanco' => 'Pureza',
                    );
            
            $directorio = array( //Arreglo multidimencional
                array(
                        'Andrea Acuña',
                        'Carrera 54 # 23 - 24',
                        '3145687532',
                        '21 de febrero',
                        'Rosado'
                    ),
                array(
                        'Jairo Alonzo',
                        'Carrera 73 # 16 - 16',
                        '3157567',
                        '15 de junio',
                        'Rojo',
                    ),
                array(
                        'Juan Diego Alvira',
                        'Diagonal 45B # 21 - 76',
                        '3145648734',
                        '30 de septiembre',
                        'Azul',
                    )
                );
        ?>                  
        <table align='center' border="2" width="70%" cellspacing="3">
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
        foreach ($directorio as $contacto) //Recorre el arreglo directorio
        {
           echo "<tr>";  //Abre la etiqueta fila
                foreach ($contacto as $dato) //Recorre el primer registro
                {
                    echo "<td>$dato</td>"; //Muestra la información del primer registo
                }
                $significadocolor = "";     //Se asigna vacia esta variable           
                foreach ($colores as $color => $valor) //Busca el significado en el arreglo colores, separa los indices del arreglo colores
                {
                    if ($dato == $color) //Se compara el significado
                    {
                        $significadocolor = $valor;  //Se asigna el significado del color
                    }
                    if ($significadocolor == "") //Si no se encuuentra el significado
                    {
                        $significadocolor = "No se encuentra el significado.";
                    }
                }
            echo "<td>$significadocolor</td>"; //Muestra el significado en la ultima celda de la fila
            echo "</tr>";  //Cierra la etiqueta fila
        }       
        ?>
        </tbody>
        </table>
    </body>
</html>
