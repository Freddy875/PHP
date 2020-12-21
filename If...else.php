<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Sentencia if
        if(condicion){
            codigo a ser ejecutado si la condicion es verdadera
        }//fin if
        */

        echo "Sentencia if"."<br>";

        $tiempo = date("H");

        if ($tiempo < "20") {
            echo "Ten un buen dia"."<br>";
        }//fin if

        /*
        Sentencia if...else
        if(condicion){

            codigo a ejecutar si la condicion es verdadera

        }else {

            codigo a ejecutar si la condicion es false

        }//fin if...else
        */

        echo "Sentencia if...esle"."<br>";

        if ($tiempo < "20") {
            echo "Ten un buen dia"."<br>";
        }else {
            echo "Ten una buena noche"."<br>";
        }//fin if-esle

        /*
        Sentencia if...elseif...else
        if(condicion){
            codigo a ejecutar si la primera condicion es verdadera
        } elseif(condicion){
            codigo a ejecutar si la primera concidion es falsa
            y la segunda condicion es verdadera
        }else {
            codigo a ejecturar si todas las condiciones son falsas
        }
        */

        echo "Sentencia if..elseif...else"."<br>";

        echo "<p> La hora (en el serivodr) es ".$tiempo;

        echo " y devolvera el siguiente mensaje: </p>";

        if ($tiempo < "10") {
            echo "Ten una buena mañana"."<br>";
        } elseif ($tiempo < "20") {
            echo "Ten un buen dia"."<br>";
        } else {
            echo "Ten una buena noche"."<br>";
        }//fin if...elseif

    ?>

</body>

</html>