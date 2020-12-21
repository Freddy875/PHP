<!DOCTYPE html>
<html>
<body>

    <?php

        /*
        Sentencia switch 
        Se usa para seleccionar uno de muchos bloques de codigo
        que se ejeecutaran 
        switch(n){
            case etiqueta1:
                codigo a ser ejecutado si n  = etiqueta1
            break;
            case etiqueta2:
                codigo a ser ejecutado si n  = etiqueta2
            break;
            case etiqueta3:
                codigo a ser ejecutado si n  = etiqueta3
            break;
            ...
            default:
                codigo si n es diferente a todas las etiquetas
        }
        */
    
        $favcolor = "negro";

        echo "Sentencia switch"."<br>";

        switch ($favcolor) {
            case 'gris':
                echo "Tu color favorito es gris";
                break;
            case 'blanco':
                echo "Tu color favorita es blanco";
                break;
            case 'negro':
                echo "Tu color favorito es negro";
                break;
            default:
                echo "Tu color favorita no es ninguno de los anteriores";
                break;
        }//fin switch...case

    ?>

</body>

</html>