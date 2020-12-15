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

        echo $varX."<br>";

        var_dump(is_int(varX));

        echo "<br>"

        echo $varX."<br>";

        var_dump(is_integer(varX));
        
        echo "<br>"

        $varX = 59.85;

        echo $varX."<br>";

        var_dump(is_int(varX));

        echo "<br>"

        /*
        Tambiene tenemos funciones para verificar
        si una bariable es del tipo de dato real 
        o floatante

        is_float()
        is_double()
        */

        $varY = 10.365;

        echo $varY."<br>";

        var_dump(is_float(varY));

        echo "<br>";

        /*
        Tambnien se tiene otra funcion para verificar 
        si un valor numerico es finto o infinito
        is_finite()
        is-infinite()
        */

        $variable1 = 1.9e411;
        
        echo $variable1."<br>";

        var_dump($variable1);

        echo "<br>";

        var_dump(is_infinite($variable1));

        echo "<br>";

        /*
        Funcion NaN
        son las siglas en ingles de Not a Number
        que se traduce como No es un Numero
        se utiliza para operaciones matematicas imposibles
        verifica si un valor es o no un numero
        */

        $variable2 = acos(8);

        echo $variable1."<br>";

        var_dump($variable2);

        echo "<br>";

        var_dump(is_nan($variable2));

        echo "<br>";

        /*
        is-numeric es una funcion que se utiliza para encontrar 
        si una variable es numerica.
        Devuelve true si la variable es numerica o una cadena numerica
        o devulve false en caso contrario
        */

        $variable3 = 5895;
        var_dump(is_numeric($variable3));

        $variable3 = "5895";
        var_dump(is_numeric($variable3));

        $variable3 = "58.95" + 100;
        var_dump(is_numeric($variable3));

        $variable3 = "Hola";
        var_dump(is_numeric($variable3));

    ?>

</body>

</html>