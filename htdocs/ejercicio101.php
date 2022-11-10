<?php



//Tengo en un array almacenadas mis 3 notas de las evaluaciones
$notas=array(10,4,6);

//Muestra la nota media final del curso
$suma = 0;


foreach($notas as $indice =>&$valor){
    $suma = $suma + $valor;
}

?>