<!DOCTYPE html>
<html>
<body>

    <?php
    
    /*
    En PHP las variables pueden declararse en cualquier parte del script
    El alcance se refiere  a la parte del script donde pueden ser 
    referenciadas o utilizadas
    PHP tiene 3 alcances de variables diferentes
    *local
    *global
    *estatica
    */

    /*
    Alcance globlal
    Una variable declarada fuera de una funcion tiene un alcance global 
    y solo se puede acceder a ella fuera de la funcion
    */

    $varGlobal = 5; //Alcance global

    function myTest1(){

        //Usar x dentro de esta funcion generara un error 
        echo "<p> La variable varGlobal dentro de esta funcion es: $varGlobal </p>"; 
    }
    myTest1();

        echo "<p> La variable varGlobal fuera de la funcion es: $varGlobal </p>"; 

    /*
    Alcance local
    Una varibal declarada dentro de una funcion tiene un alcance local
    y solo se puede acceder a ella dentro de la funcion 
    */

    function myTest2(){
        $varLocal = 5; //Alcance local

        echo "<p> La variable varLocal dentro de esta funcion es: $varLocal </p>";
    }
    myTest2();

    //Usar la variable fuera de la funcion generara un error 
    echo "<p> La variable varLocal dentro de esta funcion es: $varLocal </p>";

    /* 
    La palabra clabe global se utiliza para acceder a una variable global
    desde dentro de una funcion 
    Para eso se utiliza la palabra global antes de las variables 
    (dentro de la funcion) 
    */

    $x = 5;
    $y = 10;

    function myTest3 (){

        global $x, $y;

        $y = $x + $y;

    }
    myTest3();

    echo $y; // Salida es 15

    /*
    PHP tambien almacena todas las variables globales en una llamada de matriz
    */

    $a = 5;
    $b = 10;


    function myTest4(){

        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];

    }
    myTest4();

    echo $b; // Salida es 15

    /*
    Palabra clave estatica
    Normalmente cuando se completa/ejecuta una funcion,
    se eliminan todas sus variables.
    Sin embargo, a veces queremos que NO  se elimine 
    una variable local ya que lo necesitamos para otro  
    trabajo  
    */

    function myTest5(){

        static $iContador = 0;
        echo $iContador;
        $iContador++;

    }
    myTest5();

    myTest5();
    myTest5();
    myTest5();

    
    ?>


</body>

</html>