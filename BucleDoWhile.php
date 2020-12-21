<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Bucle do...while
        do{
            codigo a ser ejecutado
        }while(condicion es verdadera);
        */

        echo "Sentencia Do-While"."<br>";

        $variable1 = 0;
        do {
            echo "El numero es: ".$variable1."<br>";
            $variable1++;
        } while ($variable1 <= 10);

        echo "Otro ejemplo"."<br>";

        $variable2 = 6;
        do {
            echo "El numero es: ".$variable2."<br>";
            $variable2++;
        } while ($variable2 <= 5);


    ?>

</body>

</html>