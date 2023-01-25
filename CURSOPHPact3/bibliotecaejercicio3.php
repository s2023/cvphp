<?php        
    function tabla($arreglo) {
?>
    <table border="1">
    <?php
        foreach ($arreglo as $subarreglo) {
    ?>        
        <tr>
        <?php
            foreach ($subarreglo as $valor) { 
        ?>
            <td><?php echo $valor; ?></td>        
        <?php      
            }
        ?>
        </tr>        
    <?php
        }
    ?>
    </table>
<?php
    }
?>