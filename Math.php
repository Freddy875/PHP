<!DOCTYPE html>
<html>
<body>

    <?php

    /*
    PHP tiene un conjunto de funciones matematicas que permite 
    realizar tareas matematicas con numeros 
    */

    #Funcion PI devulve el valor de PI

        echo "Funcion PI"."<br>";

        echo (pi()); //Devuelve 3.1415926535898

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Funcion max() y min() devuleve el valor más alto y el más bajo 
        de un conjunto de numeros, respectivamente
        */

        echo "Funcion max() y min()"."<br>";

        echo"Minimo"."<br>";
        echo(min(0,150,30,20,-8,-200)); //Devuelve -200
        echo "<br>";
        echo"Maximo"."<br>";
        echo(max(0,150,30,20,-8,-200)); //Devuelve 300
        echo "<br>";

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Funcion abs() devuelve el valor absoluto 
        (positivo) de un numero
        */

        echo "Funcion abs()"."<br>";

        echo "Valor absoluto"."<br>";

        echo (abs(-6.7)); //Devuelve 6.7

        echo "<br>";

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Funcion sqrt() devuelve la raíz cuadrada de un numero
        */

        echo "Funcion sqrt()"."<br>";

        echo "Raiz cuadrada"."<br>";

        echo (sqrt(64));

        echo "<br>";

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Funcion round() redondea un numero de punto 
        flotante a su entero más cercano
        */

        echo "Funcion round()"."<br>";

        echo (round(0.69)); //devuelve 1
        echo "<br>";
        echo (round(0.49)); //devuelde 0
        echo "<br>";

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Funcion rand() genera un numero aleatorio
        */

        echo "Funcion rand()"."<br>";
        echo (rand());
        echo "<br>";

        /*
        Para tener un mayor control sobre el numero aleatorio 
        se puede agregar parametros de max y min para especificar
        el numero entero mas bajo y el numero mas alto a ser devueltos
        */

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";


        echo "Otra funcion rand() con un rango de valores"."<br>";
        echo (rand(10,100));
        echo "<br>";
        
        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";
    ?>

</body>

</html>