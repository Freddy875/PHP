<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<body>

<?php
        /*
        funcion NombreDeLaFuncion(){
        codigo a ser ejecutado;
        }
        */

        /*
        Crear una funcion 
        */

        echo "Crear una funcion"."<br>";

        function escribirMensaje(){
            echo "Hola Mundo"."<br>";
        }//fin funcion escribirMensaje

        escribirMensaje();

        /*
        Argumentos de las funciones
        La información se puede pasar a traves de argumentos
        Los argumentos son como variables
        Los argumentos se especifican despues del nombre de la funcion
        entre parentesis 
        Se pueden agregar tantos argumentos como uno desee,
        solo separados por una coma
        */
        echo "Argumentos de funciones"."<br>";
        echo "Funcion Nombres de Familia"."<br>";
        function NombresDeFamilia($apellido){
            echo "$apellido Simpson"."<br>";
        }//fin function NombresDeFamilia 

        NombresDeFamilia("Homero");
        NombresDeFamilia("Marge");
        NombresDeFamilia("Bart");
        NombresDeFamilia("Lisa");
        NombresDeFamilia("Maggie");

        /*
        Ya sabemos que PHP es un lenguaje flexible
        No tenemos que especificar los tipos de datos porque 
        PHP asosia automaticamente los tipos de datos 
        En ese sentido podemos agregar una cadena a un numero
        entero sin causar error
        En PHP 7 se agrego una declaracion de tipo 
        Nos da la opcion de especificar el tipo de datos esperado
        al declarar una funcion.
        Al agregar la declaracion strict arroja un "Error Fatal"
        si el tipo de dato no coinciden 
        Para especificar strict necesitamos establecer 
        declare(strict_types=1);
        Debe de estar en la primera linea del archivo PHP  
        */

        echo "Funcion SumarNumeros"."<br>";
        function SumarNumeros(int $a, int $b){
            return $a + $b;
        }//fin function SumarNumeros

        //echo SumarNumeros(5,"5 dias");
        echo SumarNumeros(5,5);
        /*
        dado que Strict no esta habilitado, "5 días" se cambia a int(5)
        y devolvera un 10
        */

        /*
        Valor del argumento predeterminado
        Si llamammos a una funcion sin argumentos 
        Toma el valor predeterminado 
        */

        echo "<br>"."Valor de argumento predeterminado"."<br>";
        function EstablecerAltura(int $AlturaMinima = 50){
            echo "La altura es: ".$AlturaMinima."<br>";
        }//fin funcion EstablecerAltura

        EstablecerAltura(350);
        EstablecerAltura();
        EstablecerAltura(135);
        EstablecerAltura(80);

        echo "Valores devueltos"."<br>";
        /*
        Para permitir que una funcion devuelva un valor
        use la declaracion return
        */
        function sum(int $x, int $y){
            $z = $x + $y;
            return $z;
        }//fin funcion sum

        echo "5 + 10 = ".sum(5,10)."<br>";
        echo "7 + 13 = ".sum(7,13)."<br>";
        echo "2 + 4 = ".sum(2,4)."<br>";

        /*
        Declaraciones de tipo de retorno
        */
        echo "<br>"."Declaraciones de tipo de retorno"."<br>";
        echo "Funcion sumar reales"."<br>";
        function sumarReales(float $valor1, float $valor2):float{
            return $valor1 + $valor2;
        }//fin funcion sumarReales
        echo sumarReales(1.2,5.2);

        /*
        Agregar otra funcion de retorno
        */

        echo "<br>"."Agregar otra funcion de retorno"."<br>";
        function agregarNumeros(float $valor3, float $valor4):int{
            return (int)($valor3 + $valor4);
        }//fin funcion agregarNumeros

        echo agregarNumeros(1.2,5.2);

        /*
        Pasar argumentos por referencia
        Normanlemente los argumentos se pasan por valor
        lo que significa que se hace una copia del valor en la funcion 
        y la variable que se paso a la funcion no se puede cambiar 
        Cuando un argumento de funcion se pasara por referencia 
        los cambios en el argumento tambien cambian la variable que se paso 
        Para convertir un argumento de funcion en una referencia,
        se usa el operador &
        */
        echo "<br>"."Pasar argumentos por referencia"."<br>";
        function Sumar_Cinco(&$valor5){
            $valor5 +=5;
        }//fin funcion Sumar_Cinco

        $num = 2;
        Sumar_Cinco($num);
        echo $num."<br>";
?>
</body>
</html>




