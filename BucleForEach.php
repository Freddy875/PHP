<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Funciona solo para matrices y se utiliza para recorrer cada par
        de clave/valor en una matriz
        foreach($array as  $value){
            codigo a ser ejecutado
        }
        */

        echo "Sentencia foreach"."<br>";

        $colores = array("rojo","azul","amarilo","verde");

        foreach ($colores as $value){
            echo $value."<br>";
        }//fin foreach

        echo "Otro ejemplo"."<br>";

        $edades = array("Pedro"=>"35","Ben"=>"32","Jose"=>"43");

        foreach($edades as $x => $val){
            echo "$x = $val"."<br>";
        }//fin foreach

    ?>

</body>

</html>