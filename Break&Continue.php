<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Break en siwtch se utiliza para saltarse una sentencia 
        Tambien puede usarse para saltarse un bucle
        */

        echo "En este caso nos vamos a saltar el 4 del ciclo"."<br>";
        echo "Break"."<br>";

        for ($i=0; $i <= 10 ; $i++) { 
            if ($i == 4) {
                break;
            }//fin if
            echo "El numero es: ".$i."<br>";
        }//fin for

        /*
        La declaracion continue rompe una iteración (en el ciclo)
        si ocurre una condicion especifica y continua con la 
        siguinete iteracion 
        */

        echo "Nuevamente nos vamos a slatar el 4 del ciclo"."<br>";
        echo "Continue"."<br>";

        for ($i=0; $i <= 10 ; $i++) { 
            if ($i == 4) {
                continue;
            }//fin for
            echo "El numero es: ".$i."<br>";
        }//fin for

        echo "Romper y Continuar"."<br>";
        /*
        echo "Break dentro de un bucle"."<br>";
        $x = 0;
        while ($x <= 10) {
            if ($x == 4) {
                break;
            }
            echo "El numero es: ".$x."<br>";
            $x++;
        }//fin while

        echo "Continue dentro de un bucle"."<br>";
        $y = 0;
        while ($y <= 10) {
            if ($y == 4) {
                continue;
            }
            echo "El numero es: ".$y."<br>";
            $y++;       
        }//fin while
        */
    ?>

</body>

</html>