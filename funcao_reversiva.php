<?php 

    //Calculando menor inteiro:
    function menorInteiro($num1, $num2, $num3) 
    { 
    $i = 1;
    while ($i >= 1) {
        if($i % $num1 == 0 && $i % $num2 == 0 && $i % $num3 == 0){
            $i = $i+1;
            break;
        }
    }
    return $i;
    } 

    //Definindo as variáveis:
    $num1 = 2;
    $num2 = 3;
    $num3 = 10;

    echo menorInteiro($num1, $num2, $num3);
?>