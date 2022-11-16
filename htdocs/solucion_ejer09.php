<?php
/**
 * Crea una clase que permita almacenar los datos de un animal
 * En concreto tendremos que guardar:
 * - Nombre (texto)
 * - Edad (numérico)
 * - Si es salvaje (booleano)
 * - peso(numérocp)
 * La clase tendrá un método que determine si el animal es peligroso
 * - Será peligroso cuando su peso supere los 10 kilos y sea salvaje
 * Añade un constructor a la clase
 * 
 * Por último, crea un objeto de tipo Animal
 * - Muestra por pantalla sus datos
 */

class Animal
{
    public $name;
    public $age;
    public $isWild;
    public $weight;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isWild = false;
        $this->weight = 10;



    }
    public function isDangerous()
    {
        if ($this->weight > 10 && $this->isWild == true) {
            return true;
        } else {
            return false;
        }
    }
}


$oso = new Aimal("yogi", 26);
$oso->weight = 180;

if ($oso->isDangerous) {
    echo 'el oso no es peligroso';
} else {
    'el oso es peligroso';
}
echo $oso->isDangerous;

?>