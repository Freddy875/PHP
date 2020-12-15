<!DOCTYPE html>
<html>
<body>

    <?php
        /*
        Un string es una secuencia de caracteres
        como un Hola Mundo 
        */

        /*
        strlen() - Devuelve la longitud de una cadena
        */

        echo "strlen"."<br>";
        echo strlen("Hola Mundo"); //salida 10
        echo "<br>";
        /*
        La funcion stt_word_count() cuenta el numero de palabras en una cadena
        */
        echo "str_word_count"."<br>";
        echo str_word_count("Hola Mundo"); //salida 2
        echo "<br>";
        /*
        strrev() invierte una cadena 
        */
        echo "strrev"."<br>";
        echo strrev("Hola Mundo"); //salida odnuM aloH
        echo "<br>";
        /*
        strpos() busca un texto especifico en una cadena 
        Si se encuentra el valor la funcion devulve la 
        posicion del caracter en la primera coicidencia
        Si no se encuentra ninguna coicidencia devolvera 
        un FALSE
        */
        echo "strpos"."<br>";
        echo strpos("Hola Mundo","Mundo"); //salida 5
        echo "<br>";
        /*
        str_replace() remplaza algunos caracteres con otros
        caracteres en una cadena 
        */
        echo "str_replace"."<br>";
        echo str_replace("Mundo","amigo","Hola Mundo"); //Hola amigo
        echo "<br>";
    ?>

</body>

</html>