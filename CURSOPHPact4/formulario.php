<table id="formulario">
    <form action="ACT4.php" name="formulario" method="POST">            
        <input id="arregloDatos" type="text" name="escenario" 
        value="<?php
                    /* Se llena este espacio con los valores de la
                     * matriz para no perder los datos
                     */
                    foreach ($escenario as $filas) {
                        foreach ($filas as $puestos) {
                            echo $puestos;
                        }
                    }
                ?>">

        <tr>
            <td>
                <table>
                    <tr>
                       <td>Fila:</td>
                        <td>
                            <input id="fila" max="5" min="1" name="fila"
                            type="number">
                        </td> 
                    </tr>

                    <tr>
                        <td>Puesto:</td>
                        <td>
                            <input id="puesto" max="5" min="1" name="puesto" 
                            type="number">
                        </td>
                    </tr>
                </table>
            </td>

            <td>
                <table>
                    <tr>
                        <td>Reservar</td>
                        <td>
                            <input checked="checked" name="accion" type="radio"
                            value="R">
                        </td>
                    </tr>

                    <tr>
                        <td>Comprar</td>
                        <td>
                            <input name="accion" type="radio" value="V">
                        </td>
                    </tr>

                    <tr>
                        <td>Liberar:</td>
                        <td>
                            <input name="accion" type="radio" value="L">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr id="botones">
            <td>
                <input id="enviar" name="enviar" type="submit"
                value="Enviar">
            </td>
            <td>
                <input id="borrar" type="reset" value="Borrar">
            </td>
        </tr>
    </form>
</table>