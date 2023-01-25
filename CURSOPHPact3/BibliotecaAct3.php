<?php        
    function operaciones($a, $b, $op) {
        /* DATOS DEL DESARROLLADOR:
         * Nombre: Juan Sebastian Rivas Agudelo
		 * 
         * Programa de formación: Desarrollo Web con PHP
         * Evidencia: Taller “Uso de funciones”
         */

        /* Utilizo la sentencia switch para evaluar el valor de $op y me retorna
         * el valor de la operación
         */
        switch ($op) {
            case 'suma':
                return $a . " + " . $b . " = " . ($a + $b);
            break;

            case 'resta':
                return $a . " - " . $b . " = " . ($a - $b);
            break;

            case 'mult':
                return $a . " * " . $b . " = " . ($a * $b);
            break;

            case 'div':
                return $a . " / " . $b . " = " . ($a / $b);
            break;
            
            default:
                return $a . " + " . $b . " = " . ($a + $b);
            break;
        }       
    }
?>