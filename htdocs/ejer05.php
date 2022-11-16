<?php
/*
 Crea un programa que admita por GET un parametro llamado valor
 http://localhost/ejer02.php?valor=4
 mostrarlo por pantalla
 conviertelo a positivo y muestralo
 */

$num = $_GET['valor'];
echo 'El valor pasado por GET es' . $num;


if ($num < 0) {
    $num = $num * -1;
}

echo "El valor en positivo es" . $num

    ?>