
<!DOCTYPE html>
<html>
<body>

    <?php

    /*
    Para evitar hackeos
    Pasamos todas las variables a traves de la
    funcion htmlspecialchars ()
    Eliminaremos caracteres innecesarios como 
    espacios adicionales, tabulaciones, nuevas lineas, 
    de los datos de entrada del usuario (con la funcion PHP trim())
    Tambien elimina las barras invertidas (\) de los datos de entrada
    de usuarios (con la funcion PHP stripslash())

    creamos una función que haga todas las comprobaciones por nosostros 
    (es mucho mas conveniente que escribir el mismo codigo uno y otra vez)

    Nombraremos a la funcion tes_input()
    */
    
    //Definir variables y el conjunto de valores vacios

    $nombre = $email = $genero = $comentarios = $sitioWeb = ""; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST["nombre"]);
        $email = test_input($_POST["email"]);
        $sitioWeb = test_input($_POST["sitioWeb"]);
        $comentarios = test_input($_POST["comentarios"]);
        $genero = test_input($_POST["genero"]);
    }//fin if

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }//fin test_input
    ?> <!---Fin de PHP--->

    <h2>Ejemplo de forma de Validaci&oacute;n en PHP </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre: <input type="text" name="nombre">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Sitio Web: <input type="text" name="sitioWeb">
        <br><br>
        Comentarios: <textarea name="comentarios" rows="5" cols="40"></textarea>
        <br><br>
        Genero:
        <input type="radio" name="genero" value="Femenino">Femenino
        <input type="radio" name="genero" value="Masculino">Masculino
        <input type="radio" name="genero" value="Otro">Otro
        <br><br>
        <input type="submit" name="Enviar" value="Submit">
    </form>

    <?php
        echo "<h2>Tu entrada: </h2>";
        echo $nombre;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $sitioWeb;
        echo "<br>";
        echo $comentarios;
        echo "<br>";
        echo $genero;
        echo "<br>";
    ?>

</body>
</html>