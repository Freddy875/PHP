<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Bucle while
        while(condicion si es verdadera){
            codigo a ser ejecutado
        }//fin while
        */
    
        echo "Sentencia while"."<br>";

        $variable1 = 0;
        while ($variable1 <= 10) {
            echo "El numero es: ". $variable1."<br>";
            $variable1++;
        }//fin while

        echo "Otro contador"."<br>";

        $variable2 = 0;
        while ($variable2 <= 100) {
            echo "El numero es: ". $variable2."<br>";
            $variable2+=10; 
        }//fin while

    ?>

</body>

</html>