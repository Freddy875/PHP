<!DOCTYPE html>
<html>
<body>

    <?php
    
    /*
    En PHP se puede usar tanto echo como print
    Ambos son similares y se utilizan para imrpimir
    datos en pantalla
    echo no tiene valor de retorno 
    print tiene valor de retorno de 1, 
    por lo que se puede usar expresiones
    echo puede tomar multiples parametros 
    (aunque ese uso es raro)
    mientras que pirnt puede tomar un argumento
    echo es ligeramente mas rapido que print
    */

    /*
    echo se puede usar con o sin parentesis
    echo o echo()
    */

        echo "<h2>¡PHP es divertido!</h2>";
        echo "Hola mundo <br>";
        echo "!Estoy aprendiendo PHP!<br>";
        echo "Esta","cadena","fue","hecha","con multiples parametros";

    /*
    El siguiente ejemplo muestra como generar texto y variables con la
    declaracion echo
    */


        $txt1 = "Aprendiendo PHP";
        $txt2 = "cadena";
        $x = 5;
        $y = 4;
        

        echo "<h2>".$txt1."</h2>";
        echo "Esto es una ".$txt2." concatenada"."<br>";
        echo $x + $y;

        /*
        Pirnt tambien se puede utilizar con o sin parentesis
        pirnt o print()
        */

        print "<h2>¡PHP es divertido!<h2>";
        print "¡Hola Mundo! <br>";
        print "¡Estamos aprendiendo PHP!";

    /*
    El siguiente ejemplo muestra como generar texto y variables con la
    declaracion echo
    */

    $txt3 = "Aprendiendo PHP";
    $txt4 = "cadena";
    $a = 5;
    $b = 4;

    print "<h2>".$txt3."<h2>";
    print "Esto es una ".$txt2." concatenada"."<br>";
    print $a + $b;


    ?>

</body>

</html>