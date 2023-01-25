<?php
    function accion($fila, $puesto, $accion, $escenario) {
        //Se evalua el valor de $accion dependiendo de lo contenido en la matriz

        //Si el puesto elegido por el usuario esta libre
        if($escenario[$fila-1][$puesto-1]=="L") {
            $escenario[$fila-1][$puesto-1]=$accion;
        }

        /* Si el puesto elegido por el usuario esta vendido se muestra una alerta
         * notificando en cada caso lo sucedido
         */
        else if($escenario[$fila-1][$puesto-1]=="V") {
            echo "<script>alert('El puesto ya esta vendido y";

            //Se evalua el valor de $accion
            if($accion=="L") {
                echo " no se puede liberar";
            } else if($accion=="R") {
                echo " no se puede reservar";
            } else if($accion=="V") {
                echo " no se puede volver a vender";
            }

            echo "');</script>'";
        }

        /* Si el puesto elegido por el usuario esta reservado y la accion es
         * reservar se muestra una alerta indicando que ya esta reservado
         */
        else if($escenario[$fila-1][$puesto-1]=="R" && $accion=="R") {
            echo "<script>alert('El puesto ya esta reservado');</script>'";
        }

        /* Si el puesto esta reservado y la accion es diferente a reservar se
         * modifica la matriz con la accion elegida por el usuario
         */
        else if($escenario[$fila-1][$puesto-1]=="R" && $accion!="R") {
            $escenario[$fila-1][$puesto-1]=$accion;
        }

        //Se retorna la matriz modificada
        return $escenario;
	}
?>