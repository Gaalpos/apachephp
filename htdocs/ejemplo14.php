<?php

// $name= " Juan";
// $age= 22;
// $height= 1.90;
// $direction = " brasil 54 Vigo";

class Person
{
    public $name;
    public $surname;
    public $age;
    private $height;
    protected $direction;
    public static $max_age = 113;

    //Constructor
    function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;

    }


    //metodos
    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function isAdult()
    {
        //esta funcion esta mal, deberiamos devolver un booleano
        if ($this->age >= 18)
            return "Es adulto";
        else
            return "Es menor de edad";
    }
}

$brother = new Person('Alberto', 'Rodriguez');
// $brother->name = "Alberto";
// $brother->surname = "Rodriguez";
$brother->age = 19;
echo $brother->getFullName();
echo "<br/>";
echo $brother->isAdult();
echo "<br/>";
echo 'Lo maximo que puede vivir una persona es: ' . Person::$max_age;

?>