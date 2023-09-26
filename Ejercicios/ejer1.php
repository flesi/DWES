<?php
$num1 = random_int(100, 150);
$num2 = random_int(100, 150);
$num3 = random_int(100, 150);

echo "El numero 1 es: " . $num1;
echo "</br> El numero 2 es: " . $num2;
echo "</br> El numero 3 es: " . $num3;
echo "</br>";

if ($num1 === $num2 && $num2 === $num3) {
    echo "Los numeros son iguales";
} elseif ($num1>$num2 && $num1>$num3) {
    echo $num1 . " Es el mayor";
} elseif ($num2>$num1 && $num2>$num3) {
    echo $num2 . " Es el mayor";
} else {
    echo $num3 . " Es el mayor";
}

?>


