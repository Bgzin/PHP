<?php

function multiplicacao($number1, $number2) {
    $resultado = 0;

//check para nao ter 0
    if ($number1 == 0 || $number2 == 0) {
        return 0;
    }

//check para ver se o numero 1 é o 2
    if ($number1 > $number2) {
        list($number1, $number2) = array($number2, $number1);
    }
//enquanto
    for ($i = 1; $i <= $number1; $i++) {
        $resultado += $number2;
    }

    return $resultado;
}

// Números a serem multiplicados
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
 
// Chama a função e exibe o resultado
$resultado = multiplicacao($number1, $number2);
echo "O resultado da multiplicação de $number1 por $number2 é: $resultado";

?>