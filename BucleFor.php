<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Sentencia for
        for(init counter; test counter; increment counter){
            codigo a ser ejecutado for cada iteracion 
        }//fin for 
        */

        echo "Sentencia for"."<br>";
        
        for ($i=0; $i <=10 ; $i++) { 
            echo "El numero es: ".$i."<br>";
        }//fin for

        echo "Otro ejemplo"."<br>";

        for ($i=0; $i <= 100 ; $i+=10) { 
            echo "El numero es: ".$i."<br>";
        }//fin for

    ?>

</body>

</html>