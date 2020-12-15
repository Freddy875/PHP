<!DOCTYPE html>
<html>
<body>

    <?php

        /*
        PHP tiene las siguientes funciones para verificar
        si el tipo de una variable es entero

        is_int()
        is_integer() hace lo mismo que is_int solo que es un alias
        */

        $varX = 5985;

        echo "Es un entero"."<br>";

        echo $varX."<br>";

        var_dump(is_int($varX));

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        echo "<br>";

        echo $varX."<br>";

        var_dump(is_integer($varX));
        
        echo "<br>";

        $varX = 59.85;

        echo $varX."<br>";

        var_dump(is_int($varX));

        echo "<br>";

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";


        /*
        Tambiene tenemos funciones para verificar
        si una bariable es del tipo de dato real 
        o floatante

        is_float()
        is_double()
        */

        echo "Es un real"."<br>";

        $varY = 10.365;

        echo $varY."<br>";

        var_dump(is_float($varY));

        echo "<br>";

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Tambnien se tiene otra funcion para verificar 
        si un valor numerico es finto o infinito
        is_finite()
        is-infinite()
        */

        echo "Es infinito o finito"."<br>";

        $variable1 = 1.9e411;
        
        echo $variable1."<br>";

        var_dump($variable1);

        echo "<br>";

        var_dump(is_infinite($variable1));

        echo "<br>";

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Funcion NaN
        son las siglas en ingles de Not a Number
        que se traduce como No es un Numero
        se utiliza para operaciones matematicas imposibles
        verifica si un valor es o no un numero
        */

        echo "Es un numero o no es un numero"."<br>";

        $variable2 = acos(8);

        echo $variable2."<br>";

        var_dump($variable2);

        echo "<br>";

        var_dump(is_nan($variable2));

        echo "<br>";

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        is_numeric es una funcion que se utiliza para encontrar 
        si una variable es numerica.
        Devuelve true si la variable es numerica o una cadena numerica
        o devulve false en caso contrario
        */

        echo "Es un numero o no es un numero"."<br>";

        $variable3 = 5895;
        echo $variable3."<br>";
        var_dump(is_numeric($variable3));

        $variable3 = "5895";
        echo $variable3."<br>";
        var_dump(is_numeric($variable3));

        $variable3 = "58.95" + 100;
        echo $variable3."<br>";
        var_dump(is_numeric($variable3));

        $variable3 = "Hola";
        echo $variable3."<br>";
        var_dump(is_numeric($variable3));

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Convertir cadenas y flotantes a entero
        */

        /*
        Castear de flotante a entero
        */

        echo "Castear un flotante a un entero"."<br>";
        $variable4 = 23456.789;
        $int_cast = (int)$variable4;
        echo $int_cast; 

        echo "<br>";

        /*
        Castear una cadena a entero
        */

        echo "Castear una cadena a entero"."<br>";
        $variable4 = "23456.789";
        $int_cast = (int)$variable4;
        echo $int_cast;

        echo "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

    ?>

</body>

</html>