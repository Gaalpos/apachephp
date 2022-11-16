<?php
/*
 * Crea un programa que posea una función que indique si un número es par o impar
 * Usa la función para mostrar por pantalla si el número 22 es par o impar
 * Usa la función para mostrar por pantalla si el número 33 es par o impar
 */

function isEven($value)
{
    /**
     *if ($value % 2 == 0)
     *   return true;
     *else
     *     return false;
     */
    return $value % 2 == 0;
    // return !($value%2); //refucktorizar

}
isEven(22);
isEven(23);


?>