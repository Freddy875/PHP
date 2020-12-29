<!DOCTYPE html>
<html>
<body>

    <?php

        /*
        Las superglobales son variables integradas que siempre están disponibles
        en todos los ambitos 
        Se puede acceder a ellas independientemente del alcance 
        y se puede acceder a ellas desde cualquier funcion, clase o archivo 
        sin tener que hacer nada en especial
        */

        echo "Varaibles Superglobales"."<br>";

        echo "GLOBALS"."<br>";

        /*
        $GLOBALS es una varibale super global 
        Se utiliza para acceder a varibles globales 
        desde cualquier lugar del script 
        */

        $NumeroX = 75;
        $NumeroY = 25;

        echo "El primer numero es: ". $NumeroX ."<br>";
        echo "El segundo numero es: ". $NumeroY."<br>";


        function adicion(){
            $GLOBALS['NumeroZ'] = $GLOBALS['NumeroX'] + $GLOBALS['NumeroY'];
        }

        adicion();

        echo "El resultado de sumar ". $NumeroX." + ". $NumeroY. " = " . $NumeroZ."<br>";

        /*
        $_SERVER es una variable super global
        Que contiene información sobre encabezados,
        rutas y ubicaiones del script  
        */

        echo "SERVER"."<br>";

        echo $_SERVER['PHP_SELF']."<br>";
        /*
        Devuelve el nombre del archivo que actualmente esta ejecutando el script
        */

        echo $_SERVER['SERVER_NAME']."<br>";
        /*
        Devuelve la ruta del script actual
        */

        echo $_SERVER['HTTP_HOST']."<br>";
        /*
        Devuelve el Host de cabezera de la solicitud actual
        */

        echo $_SERVER['HTTP_REFERER']."<br>";
        /*
        Devuelve la URL completo de la pagina actual 
        */

        echo $_SERVER['HTTP_USER_AGENT']."<br>";

        echo $_SERVER['SCRIPT_NAME']."<br>";
        /*
        Devuelve la ruta del actual script
        */
    ?>

    <form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" >
        Nombre: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
            echo "REQUEST"."<br>";

            /*
            Es una variable superglobal 
            que se utiliza para recopilar 
            datos despues de enviar 
            un formulario HTML
            */
    
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Recolecta el valor de entrada en el campo 
                $name = htmlspecialchars($_REQUEST['fname']);
                if (empty($name)) {
                    echo "Nombre esta vacio";
                } else {
                    echo $name;
                }//fin if-else
                
            }//fin if 

    ?>

    <form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" >
        Nombre: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php

            echo "POST"."<br>";

            /*
            Es una variable super global 
            Que se utiliza para recopilar datos de formularios
            y despues enviar un formulario HTML con el metodo 
            = "post".$_POST
            Tambien se usa ampliamente para pasar varibles 
            */

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Recolecta el valor de entrada en el campo 
                $name = $_POST['fname'];
                if (empty($name)) {
                    echo "Nombre esta vacio";
                } else {
                    echo $name;
                }//fin if-else
                
            }//fin if 

    ?>

</body>
</html>