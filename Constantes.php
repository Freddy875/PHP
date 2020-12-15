<!DOCTYPE html>
<html>
<body>

    <?php

    /*
    Una vez definida una constante no se puede cambiar ni volver a definir
    El nombre de una constante valido comineza con una letra o un guion bajo 
    sin el signo de $ antes del nombre de la constante
    otra diferencia de las variables con las contastes es que estas 
    son automaticamente globales en todo el script
    Para crear una constante usamos define()
    */
    
        define("SALUDOS","Bienvenido a la jungla de codigo en PHP");

        echo "Constantes"."<br>";

        echo SALUDOS;

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        Se puede crear una constante con un nombre que no distinga 
        entre mayusculas y minusculas
        */

        #define("OTRO_SALUDO","Bienvenido al mundo de PHP",true);

        #echo "Constantes ";

        #echo otro_saludo;

        /*
        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";
        */

        /*
        Se puede crear una constante array 
        */

        echo "Contaste array"."<br>";

        define("cars",[
            "Alfa Romero",
            "BMW",
            "Honda",
            "Toyota"
        ]);

        echo cars[0];

        echo 
        "<br>".
        "------------------------------------------------------------------------------------"
        ."<br>";

        /*
        las contastes son automaticamente globales en todo el script
        */

        echo "Constantes globales"."<br>";

        function miPrueba(){
            echo SALUDOS;
        }

        miPrueba();



    ?>

</body>

</html>