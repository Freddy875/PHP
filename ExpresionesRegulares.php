<!DOCTYPE html>
<html>
<body>

    <?php
    
        echo "Expresiones regulares"."<br>";

        /*
        Una expresión regular es una secuencia de caracteres
        que forman un patron de busqueda.
        Cuando buscas datos en un texto, puedes utilizar 
        este patron de busqueda para describir lo que 
        estas buscando
        Una expresion regular puede ser un solo caracter
        o un patron mas compicado
        Se pueden utilizar para realizar todo tipo de operaciones
        de busqueda y reemplazo de texto 
        Las expresiones regulares son cadenas compuestas por 
        delimitadores, un patron y modificadores opcionales

        $exp = "/Fernando/i";

        En el ejemplo anterior  / es el delimitador
        Fernando es el patron 
        e i es el modificador que hace que la busqeuda no
        distinga entre mayusculas y minusculas 
        Existen otros delimitadores como #   
        */

        echo "Funciones de expresion regular"."<br>";
        echo "preg_match"."<br>";
        /*
        Devuelve 1 si el patron fue encontrado 
        en la cadena o devuelve 0 si no fue
        encontrado
        */

        echo "Dira si una cadena contiene coicidencias de un patron"."<br>";

        $cadena1 = "Visita mi portaolio"."<br>";
        $patron1 = "/visita/i";
        echo $cadena1."<br>";
        //echo $patron."<br>";
        echo preg_match($patron1,$cadena1)."<br>"; 
        //Devuelve 1

        echo "preg_match_all()"."<br>";
        /*
        Devuelve el numero de veces que el patron fue 
        encontrado en una cadena, tambien puede ser cero 
        */

        echo "La funcion dira cuantas coincidencias se encontraron 
        para un patron en una cadena"."<br>";

        $cadena2 = "The rain in SPAIN falls mainly on the plains.";
        echo $cadena2."<br>";
        $patron2 = "/ain/i";
        echo preg_match_all($patron2,$cadena2);

        echo "<br>";

        echo "preg_replace()"."<br>";
        /*
        Devuelve una nueva cadena donde los patrones 
        coicidentes se han reemplazado por otra cadena 
        */
        echo "La funcion reemplazara todas las coicidencias del 
        patron de una cadena con otra cadena"."<br>";

        $cadena3 = "Usa Windows"."<br>";
        echo $cadena3;
        $patron3 = "/Windows/i";
        echo preg_replace($patron3,"Linux",$cadena3);

        echo "<br>";

        echo "Agrupaiones"."<br>";
        echo "Se utilizan parentesis para aplicar cuantificadores a patrones compeltos
        Tambien se puede utilizar para seleccionar partes del patron 
        que se utilizaran como coindicencia"."<br>";

        $cadena4 = "Manzanas y Bananas";
        $patron4 = "/ba(na){2}/i";
        echo $cadena4;
        echo "<br>";
        echo preg_match($patron4,$cadena4);


    ?>

</body>
</html>