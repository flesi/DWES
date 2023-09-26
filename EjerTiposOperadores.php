<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // OPERADORES ARITMETICOS
        echo "<h2>Operadores Aritmeticos</h2>";
        $n1 = 5;
        $n2 = 3;

        echo "<br> Suma <br>";
        echo $n1 + $n2; // El resultado es 8
        echo "<br> Resta <br>";
        echo $n1 - $n2; // El resultado es 2
        echo "<br> Multiplicación <br>";
        echo $n1 * $n2; // El resultado es 15
        echo "<br> División <br>";
        echo $n1 / $n2; // El resultado es 1.6666666666667
        echo "<br> Modulo (Resto División) <br>";
        echo $n1 % $n2; // El resultado es 2
        echo "<br> Exponenciación <br>";
        echo $n1 ** $n2; // El resultado es 125
        

        //************************************* */

        // OPERADORES DE ASIGNACIÓN
        echo "<h2>Operadores de Asignación</h2>";
        
        // = : Asignación
        echo "<br> Asignacion <br>";
        echo $n1 = 5; // Ahora n1 vale 5
        
        // += : Suma y asigna
        echo "<br> Suma y Asigna <br>";
        echo $n1 +=3;  // Ahora n1 vale 8
        
        // -= : Resta y asigna
        echo "<br> Resta y Asigna <br>";
        echo $n1 -=3; // Ahora n1 vale 5
        
        // *= : Multiplica y asigna
        echo "<br> Multiplica y Asigna <br>";
        echo $n1 *=10; // Ahora n1 vale 50
        
        // /= : Divide y asigna
        echo "<br> Divide y Asigna <br>";
        echo $n1 /=2; // Ahora n1 vale 25
        
        // %= : Módulo y asigna
        echo "<br> Modulo y Asigna <br>";
        echo $n1 /=2; // Ahora n1 vale 12.5



        //************************************* */

        //OPERADORES DE COMPARACIÓN
        echo "<h2>Operadores de Comparación</h2>";
       // == : Igual a
       echo "Igual a == <br>";
       $num1 = 5;
       $num2 = 6;
       echo $n1 . " == " . $n2;
       echo "<br> El Resultado es : ";
       echo $num1 == $num2; 
       echo "<br><br>";
       
      // === : Idéntico a (valor y tipo)
      //  != o <> : No igual
      //  !== : No idéntico
       // < : Menor que
      //  > : Mayor que
      //  <= : Menor o igual
      //  >= : Mayor o igual

        //************************************* */
        //OPERADORES INCREMENTALES / DECRECIENTES
        echo "<h2>Operadores Incrementales / Decrecientes</h2>";
        //++$x : Preincremento
        // $x++ : Postincremento
        // --$x : Predecremento
        // $x-- : Postdecremento

        //************************************* */
        //OPERADORES LOGICOS
        echo "<h2>Operadores Lógicos</h2>";
        // and o && : Y lógico

        //************************************* */
        //OPERADORES DE STRING
        echo "<h2>Operadores de String</h2>";
        // . : Concatenación
        echo "Concatenación . <br>";
        $palabra1 = "Hola ";
        $palabra2 = "mundo";
        echo "\$palabra1 . \$palabra2";
        $r = $palabra1 . $palabra2;
        echo "<br> El Resultado es : " . $r; 
        echo "<br><br>";
        
        // .= : Concatenación y asigna


    ?>
</body>
</html>