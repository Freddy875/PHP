<!DOCTYPE html>
<html>
<body>

    <?php

    /*
    Las variables pueden almacenar datos de diferentes tipos    
    y diferentes tipos de datos pueden hacer diferentes cosas
    PHO admite los siguientes datos
    String
    Integer
    Float
    Boolean
    Array
    Object
    NULL
    Resource
    */

    /*
    String
    */

    $varString1 = "Hola Mundo";
    $varString2 = "Hola Mundo";

    echo $varString1;
    echo "<br>";
    echo $varString2."<br>";

    /*
    Integer
    la funcion var_dump() devuleve el tipo y valor de datos:
    */

    $varInteger = 5985;
    var_dump($varInteger);
    echo "<br>";
    

    /*
    Flotantes
    */

    $varFloat = 10.365;
    var_dump($varFloat);
    echo "<br>";
    

    /*
    Boolean
    Respresenta dos estados posible
    Verdedero o Falso
    $x = true;
    $y = false;
    */

    /*
    Array o Matriz 
    Almacena varios valores en una sola variable
    */

    $cars = array("Volvo","BMW","Toyota","Honda");
    var_dump($cars);
    echo "<br>";
    

    /* 
    Esto esta relacionado con la POO
    Una clase es una platilla para un objeto
    y un objeto es una instancia de una clase
    */

    class Car{
        public $color;
        public $modelo;   
        public function __construct($color,$modelo){
            $this->color = $color;
            $this->modelo = $modelo;
        }
        public function message(){
            return "¡Mi caro es un ".$this->modelo." ".$this->color." !";
        }
    }

    $myCar = new Car("Volvo","negro");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("Honda","blanco");
    echo $myCar -> message();
    echo "<br>";

    /*
    NULL es una variable que no tiene ningun valor asignado
    */

    $varNull = "Hola Mundo";
    $varNull = null;
    var_dump($varNull);
    echo "<br>";

    ?>

</body>

</html>