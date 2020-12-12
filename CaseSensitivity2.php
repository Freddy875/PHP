<!DOCTYPE html>
<html>
<body>



    <?php
    //PHP es case sensitivity es decir que importa si se escribe en mayusculas y minusculas
    //En este ejemplo solo la primera declaracion mostrara el valor de la variable $color
    //Esto se debe a que $color, $COLOR y $coLOR se tratan como tres variables distintas

        $color = "red";
        echo "My car is ". $color. "<br>";
        echo "My house is ". $color. "<br>";
        echo "My boat is " . $color. "<br>";
        //echo "My house is ". $COLOR. "<br>";
        //echo "My boat is" . $coLOR. "<br>";

    ?>

</body>

</html>