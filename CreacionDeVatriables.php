<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Reglas de las variables
        *Una varible comienza con el signo $
        segido del nombre de la variable 
        *Una nombre de una variable debe de comenzar 
        con una letra o el caracter de subrayado
        *El nombre de una variable no puede comenzar
        con un numero
        *El nombre de una variable solo puede contener
        caracteres alfanumericos y guiones bajos (Az,0-9 y _)
        *Los nombre de las variables distinguen entre 
        mayusculas y minusculas 
        ($age y $AGE son variables diferentes)
        */

        $txt1 = "Hello World!";
        $txt2 = "code in PHP";
        $x = 5;
        $y = 10.5;
        $z = 4;

        /*
        La declaracion echo en PHP se usa a menudo
        para enviar datos a la pantalla
        */

        /*Imprimir en pantalla el contenido de una variable */
        echo $txt1;
        echo $x;
        echo $y;
        echo "I love $txt2";
        /*Otra forma de impirmir en pantalla el contenido de una varible */
        echo "I love " . $txt2 . "!";

        /*Tambien se pueden mostrar el resultado de operaciones */
        echo $x + $z;
        echo $x + $y;

    ?>

</body>

</html>