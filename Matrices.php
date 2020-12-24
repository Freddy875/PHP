<!DOCTYPE html>
<html>
<body>

    <?php
    
        /*
        Una matriz almacena varios valores en una sola variable
        Se usa la funcion array para crear una matriz 
        */
        $cars = array("Honda","Volvo","BMW","Toyota");

        echo "Me gustan los autos ".$cars[0]." , ".$cars[1]." , ".$cars[2]." , ".$cars[3]." ."."<br>";

        /*
        Hay 3 tipos de matrices
        Indexadas: Matrices con un indice numerico
        Asociativas: Matrices con claves con un nombre
        Multidimensionales: Matrices que contienen una o más matrices
        */

        echo "Obtener la longitud de una matriz con la funcion count()"."<br>";
        echo count($cars);
        
        echo "<br>"."Matrices Indexadas"."<br>";

        
        #Hay dos formas de crear matrices indexadas:
        
        #Indice se asigna automaticamente (el indice siempre comienza con 0)
        
        $fruits = array("Manzana","Platano","Naranja");
        $arrelenght = count($fruits);
        #arrelenght la creamos para asignar el total de la longitud de la matriz

        /*
        O el indice se puede asignar manualmente 
        $fruits[0] = "Manzana";
        $fruits[1] = "Platano";
        $fruits[2] = "Naranaja";
        */

        echo "La siguiente matriz contiene frutas ".$fruits[0]." , ".$fruits[1]." , ".$fruits[2]." ."
        ."<br>";
        echo count($fruits);
        echo "<br>";

        echo "Bucle a traves de una matriz indexada"."<br>";
        /*
        Se puede recorrer e imprimir todos los valores de una matriz indexada
        usando el bucle for 
        */
        for ($x=0; $x < $arrelenght  ; $x++) { 
            echo $fruits[$x];
            echo "<br>";
        }//fin for

        echo "Matrices asociativas"."<br>";
        /*
        Matrices que utilizan claves con nombre que les asigna 
        Hay dos formas de crear una matriz asoiativo
        */

        $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

        /*
        La segunda forma 
        $age['Peter']="35";
        $age['Ben']="37" ;
        $age['Joe']="43";
        */

        #Las claves se puede usar en un script
        echo "Peter tiene ".$age['Peter']." anios de edad."."<br>"; 
        echo "Bucle a traves de una matriz asosiativa con el bucle foreach"."<br>";
        foreach ($age as $key => $key_value) {
            echo "Clave =".$key.", Valor=".$key_value;
            echo "<br>";
        }//fin foreach

        echo "Matrices Multidemencionales"."<br>";

        $autos = array(
            array("Vovlo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );

        echo $autos[0][0].": en almacen: ".$autos[0][1]." , vendidos: ".$autos[0][2].". <br>";
        echo $autos[1][0].": en almacen: ".$autos[1][1]." , vendidos: ".$autos[1][2].". <br>";
        echo $autos[2][0].": en almacen: ".$autos[2][1]." , vendidos: ".$autos[2][2].". <br>";
        echo $autos[3][0].": en almacen: ".$autos[3][1]." , vendidos: ".$autos[3][2].". <br>";

        /*
        Tambien podemos poner un for dentro de otro for para obtener los elementos de la matriz
        */

        for ($row=0; $row < 4; $row++) { 
            echo "<p><b>Numero de fila ".$row."</b></p>";
            echo "<ul>";
            for ($col=0; $col <3 ; $col++) { 
                echo "<li>".$autos[$row][$col]."</li>";
            }# fin del segundo for
            echo "</ul>";
        }# fin de primer for

        echo "<br>"."Funciones de ordenamiento para las matrices"."<br>";

        echo "Ordenar una matriz en orden ascendente - sort()"."<br>";

        /*
        Ordena los elementos de la matriz en orden alfabetico ascendente
        */

        echo "<br>"."Ordena los elementos de la matriz en orden alfabetico ascendente"."<br>";
        sort($fruits);
        $clenght = count($fruits);
        #Creamos clenght para la longitud de los caracteres de $fruits

        for ($i=0; $i < $clenght ; $i++) { 
            echo $fruits[$i];
            echo "<br>";
        }#fin for

        echo "<br>"."Tambien se pueden ordenar los valores de una matriz de numeros en el orden numerico".
        " ascendente"."<br>";
        
        $numeros = array(4,6,2,22,11);
        sort($numeros);

        $longitud = count($numeros);
        #Para conocer la longitud de la matriz de numeros
        for ($j=0; $j < $longitud ; $j++) { 
            echo $numeros[$j];
            echo "<br>";
        }#fin for

        echo "Ordenar una matriz en orden descendente - rsort()"."<br>";

        rsort($fruits);
        for ($k=0; $k < $clenght; $k++) { 
            echo $fruits[$k];
            echo "<br>";
        }#fin for

        echo "<br>"."Tambien se pueden ordenar los valores de una matriz de numeros en el orden numerico".
        " descendente"."<br>";

        rsort($numeros);

        for ($l=0; $l < $longitud ; $l++) { 
            echo $numeros[$l];
            echo "<br>";
        }#fin for

        echo "Ordenar una matriz (orden ascendente),segun su valor - asort()"."<br>";

        asort($age);

        foreach ($age as $key => $key_value) {
            echo "Clave =".$key.", Valor=".$key_value;
            echo "<br>";
        }#fin foreach

        echo "Ordenar una matriz (orden ascendente),segun su clave - ksort()"."<br>";

        ksort($age);
        
        foreach ($age as $key => $key_value) {
            echo "Clave =".$key.", Valor=".$key_value;
            echo "<br>";
        }#fin foreach

        echo "Ordenar una matriz (orden descendente),segun su valor - arsort()"."<br>";
        
        arsort($age);
        
        foreach ($age as $key => $key_value) {
            echo "Clave =".$key.", Valor=".$key_value;
            echo "<br>";
        }#fin foreach

        echo "Ordenar una matriz (orden descendente),segun su clave - krsort()"."<br>";
        
        krsort($age);
        
        foreach ($age as $key => $key_value) {
            echo "Clave =".$key.", Valor=".$key_value;
            echo "<br>";
        }#fin foreach

        echo "<br>"."Ultimo ejemplo orden ascendente alfabetico"."<br>";

        $colors = array("rojo","verde","azul","amarillo");
        sort($colors);

        $clenght = count($colors);

        for ($m=0; $m < $clenght; $m++) { 
            echo $colors[$m];
            echo "<br>";
        }#fin for
    ?>
</body>
</html>