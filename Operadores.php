<!DOCTYPE html>
<html>
<body>

    <?php

    /*
    Se utilizan para realizar operaciones sobre variables
    y valores:
    En PHP se divivden en los siguientes grupos
    -Aritmeticos
    -De Asignación
    -De Comparacion 
    -Incremento/Decremento
    -Logicos
    -De cadena 
    -De matriz
    -De asiganción condicional
    */

    /*
    Operadores aritmeticos
    */

    echo "Operadores aritmeticos"."<br>";

    $variable1 = 10;
    $variable2 = 6;

    echo "<br>".$variable1."<br>";

    echo "<br>".$variable2."<br>";

    #Adicion

    echo "<br>"."Adición"."<br>";

    echo $variable1 + $variable2."<br>"; //Salida 16

    #Substraccion

    echo "<br>"."Substraccion"."<br>";

    echo $variable1 - $variable2."<br>"; //Salida 4

    #Multiplicacion

    echo "<br>"."Multiplicacion"."<br>";

    echo $variable1 * $variable2; //Salida 60

    #Division

    echo "<br>"."Division"."<br>";
    
    echo ($variable1 / $variable2)."<br>"; //Salida 1.6667;

    #Modulo

    echo "<br>"."Modulo"."<br>";

    echo ($variable1 % $variable2)."<br>"; // Salida 4

    #Exponente

    echo "<br>"."Exponente"."<br>";

    echo ($variable1 ** $variable2)."<br>"; // Salida 1,000,000

    #Operadores de asignacion 

    echo "<br>"."Operadores de asignacion"."<br>";

    echo "<br>"."Adicion"."<br>";

    /*
    x += y es lo mismo que x = x + y
    */

    $variable3 = 20;

    echo $variable3."<br>";

    $variable3 += 100;

    echo $variable3."<br>"; //Salida 120

    echo "<br>"."Substraccion"."<br>";

    /*
    x -= y es lo mismo que x = x - y
    */

    $variable4 = 50;

    echo $variable4."<br>";

    $variable4 -= 30;

    echo $variable4."<br>"; //Salida 20

    echo "<br>"."Multiplicacion"."<br>"; 

    /*
    x *= y es lo mismo que x = x * y 
    */

    $variable5 = 10;

    echo $variable5."<br>";

    $variable5 *= 6;

    echo $variable5."<br>"; //Salida 60
    
    echo "<br>"."Division"."<br>";

    /*
    x /= y es lo mismo que x = x / y
    */

    $variable6 = 10;

    echo $variable6."<br>";

    $variable6 /= 5;

    echo $variable6."<br>"; //Salida 2

    echo "<br>"."Modulo"."<br>";

    /*
    x %= y es lo mismo que x = x % y
    */

    $variable7 = 15;

    echo $variable7."<br>";

    $variable7 %= 4;

    echo $variable7."<br>";

    echo "<br>"."Operadores de compracion"."<br>";

    echo "<br>"."Igual"."<br>";

    $variable8 = 100;

    echo $variable8."<br>";

    $variable9 = "100";

    echo $variable9."<br>";

    var_dump($variable8 == $variable9); //Devuelve true porque los valores son iguales

    echo "<br>";

    echo "<br>"."Identico"."<br>";

    /*
    Devuelve true si $x es igual a $y y son del mismo tipo 
    */

    echo $variable8."<br>";

    echo $variable9."<br>";

    var_dump($variable8 === $variable9); //Devuelve false porque no son del mismo tipo

    echo "<br>";

    echo "<br>"."No es igual. Forma !="."<br>";

    echo $variable8."<br>";

    echo $variable9."<br>";
    
    var_dump($variable8 != $variable9); //Devuelve false porque los valores son iguales

    echo "<br>";

    echo "<br>"."No es igual. Forma <>"."<br>";

    echo $variable8."<br>";

    echo $variable9."<br>";
    
    var_dump($variable8 <> $variable9); //Devuelve false porque los valores son iguales

    echo "<br>";

    echo "<br>"."No es identico"."<br>";

    /*
    Devuelve true si $x no es igual $y o si no son del mismo tipo
    */

    echo $variable8."<br>";

    echo $variable9."<br>";
    
    var_dump($variable8 !== $variable9); //Devuelve true porque no son de tipos iguales

    echo "<br>";

    echo "<br>"."Mayor que"."<br>";

    $variable10 = 100;

    echo $variable10."<br>";

    $variable11 = 50;

    echo $variable11."<br>";

    var_dump($variable10 > $variable11); //Devuleve true porque 100 es mayor que 50

    echo "<br>";

    echo "<br>"."Menor que"."<br>";

    $variable10 = 100;

    echo $variable10."<br>";

    $variable11 = 50;

    echo $variable11."<br>";

    var_dump($variable11 < $variable10); //Devuleve true porque 50 es menor que 100

    echo "<br>";

    echo "<br>"."Mayor que o igual a"."<br>";

    $variable12 = 50;

    echo $variable12."<br>";

    $variable13 = 50;

    echo $variable13."<br>";

    var_dump($variable12 >= $variable13); //Devuelve tru porque son iguales
    
    echo "<br>";

    echo "<br>"."Menor que o igual a"."<br>";

    echo $variable12."<br>";

    echo $variable13."<br>";

    var_dump($variable12 <= $variable13); //Devuelve tru porque son iguales 

    echo "<br>";

    echo "<br>"."Sapceship <=>"."<br>";

    /*
    Devuelve un entero menor que, igual a, o mayor que cero
    dependiendo de si $x es menor que, igual a o mayor que $y
    Introducido en PHP 7
    */

    $variable14 = 5;

    echo $variable14."<br>";

    $variable15 = 10;

    echo $variable15."<br>";

    echo ($variable14 <=> $variable15)."<br>"; 
    //Devuelve -1 porque 5 es menor que 10

    $variable14 = 10;

    echo $variable14."<br>";

    $variable15 = 10;

    echo $variable15."<br>";

    echo ($variable14 <=> $variable15)."<br>";
    //Devuelve 0 porque son iguales

    $variable14 = 15;

    echo $variable14."<br>";

    $variable15 = 10;

    echo $variable15."<br>";

    echo ($variable14 <=> $variable15)."<br>";
    //Devuelve +1 porque 15 es mayor que 10

    echo "<br>";

    echo "<br>"."Operadores incremento/decremento"."<br>";

    echo "<br>"."Pre-incrmeento"."<br>";

    $variable16 = 10;

    echo ++$variable16."<br>"; //Devuelve 11

    echo "<br>"."Post-incremento"."<br>";

    $variable17 = 10;

    echo $variable17++."<br>"; 
    //Devuelve 10 porque primero regresa 10 y despues lo incrementa en uno 

    echo $variable17."<br>";

    echo "<br>"."Pre-decremento"."<br>";
    
    echo $variable18 = 10;

    echo "<br>";

    echo --$variable18."<br>"; //Devuelve 9

    echo "<br>"."Post-decremento"."<br>";

    $variable19 = 10;

    echo $variable19--."<br>";
    //Devuelve 10 porque primero regresa 10 y despues lo decrementa en uno
    
    echo $variable19."<br>";

    echo "<br>";

    echo "<br>"."Operdores logicos"."<br>";

    /*
    Devuelve true si ambas comparaciones son verdaderas
    */

    echo "<br>"."Operador and"."<br>";

    $variable20 = 100;

    echo $variable20."<br>";

    $variable21 = 50;

    echo $variable21."<br>";

    if ($variable20 == 100 and $variable21 == 50) {
        echo "Hola mundo esto es un operador logico and"."<br>";
    }//fin if

    echo "Operador or"."<br>";

    /*
    Devuelve true si alguna de las dos condiciones es verdadera 
    */

    echo $variable20."<br>";

    echo $variable21."<br>";

    if ($variable20 == 100 or $variable21 == 80) {
        echo "Hola mundo esto es un operador logico or"."<br>";
    }//fin if

    echo "<br>"."Operador xor"."<br>";

    /*
    Devuelve true si $x o $y es verdadera, pero no ambas 
    */

    echo $variable20."<br>";

    echo $variable21."<br>";

    if ($variable20 == 100 xor $variable21 == 80) {
        echo "Hola mundo esto es un operador logico xor"."<br>";
    }//fin if

    echo "<br>"."Operador and de la forma &&"."<br>";

    echo $variable20."<br>";

    echo $variable21."<br>";

    if ($variable20 == 100 && $variable21 == 50) {
        echo "Hola mundo esto es un operador logico and de la forma &&"."<br>";
    }//fin if

    echo "<br>"."Operador or de la forma ||"."<br>";

    echo $variable20."<br>";

    echo $variable21."<br>";

    if ($variable20 == 100 || $variable21 == 80) {
        echo "Hola mundo esto es un operador logico and de la forma ||"."<br>";
    }//fin if

    echo "<br>"."Operador NOT"."<br>";

    $variable22 = 100;

    echo $variable22."<br>";

    if ($variable21 !== 90) {
        echo "Hola mundo este es un operador logico NOT"."<br>";
    }//fin if

    echo "<br>"."Operadores de cadenas"."<br>";

    echo "<br>"."Concatenacion"."<br>";

    $txt01 = "Hola";
    $txt02 = "mundo";
    echo $txt01.$txt02."<br>";

    echo "<br>"."Concatenacion de asignacion"."<br>";

    $txt01.=$txt02;

    echo $txt01."<br>";

    echo "<br>"."Operadores de matriz"."<br>";

    echo "<br>"."Union"."<br>";

    $matrizA = array("a" => "red","b" => "blue");

    print_r($matrizA);

    echo "<br>";

    $matrizB = array("c" => "yellow", "d" => "green");

    print_r($matrizB);

    echo "<br>";

    print_r($matrizA + $matrizB); 

    echo "<br>";

    echo "<br>"."Equivalencia"."<br>";

    /*
    Devuelve true si $matrizA y $matrizB tiene el mismo clave/valores pares
    */

    var_dump($matrizA == $matrizB); //Devuelve false

    echo "<br>";

    echo "<br>"."Identity o Escencia"."<br>";

    /*
    Devuelve true si $matrizA y $matrizB tiene el mismo clave/valores pares
    en el mismo orden y con los mismos tipos
    */

    var_dump($matrizA === $matrizB); //Devuelve false

    echo "<br>";

    echo "<br>"."Desigualdad de la forma !="."<br>";

    /*
    Devuelve true si $matrizA no es igual a la $matrizB 
    */

    var_dump($matrizA != $matrizB); //Devuelve true 

    echo "<br>"."Desigualdad de la forma <>"."<br>";

    var_dump($matrizA <> $matrizB); //Devuelve true

    echo "<br>";

    echo "<br>"."Non-Identity"."<br>";

    /*
    Devuelve true si $matrizA no es identica a la $matrizB 
    */

    var_dump($matrizA !== $matrizB); //Devuelve true

    echo "<br>";

    echo "<br>"."Operadores de asignacion condicional"."<br>";

    echo "<br>"."Operador ternario"."<br>";

    //si empty($user) = TRUE, entonces muestra $status = "anonimo"
    echo $status = (empty($user)) ? "anonimo" : "Inicio sesion";
    echo ("<br>");

    $user = "Juan Perez";
    //si empty($user) = FALSE, entocnes muestra $status = "Inicio sesion"
    echo $status = (empty($user)) ? "anonimo" : "Inicio sesion";
    echo ("<br>");

    echo "<br>"."Null coalescing"."<br>";
    /*
    Devuelve el valor de $x
    El valor de $x es expresion1 si la expresion1 existe 
    y no es nula 
    Si la expresion no existe, o es nula 
    el valor de $x es expresion2
    Esto fue introducido en PHP 7
    */
    
    /*
    La variable $user es el valor de $_GET['user']
    y 'anonimos' si no existe 
    */
    echo $user  = $_GET["user"] ?? "anonimo";
    echo ("<br>");

    /*
    variable $color es "roja" si $color no existe o es nulo 
    */
    echo $color  = $color ??  "red";
    ?>

</body>
</html>