<?php

echo 'hola';
echo '<br>';

$n1 = 5;
$n2 = 6;

for ($i=1; $i < 100 ; $i++) { 
    if ($i%3==0 && $i%5==0) {
        echo 'FizzBuzz';
    }elseif ($i%3==0) {
        echo 'Fizz';
    }elseif ($i%5==0) {
        echo 'Buff';
    } else {
        echo $i;
    }
    echo '<br>';
}


if ($n1 < $n2 ) {
    echo $n1 . ' Es el menor';
    echo '<br>';
    echo $n2 . ' Es el mayor';
} else {
    echo $n2 . ' Es el menor';
    echo '<br>';
    echo $n1 . ' Es el mayor';
}

?>