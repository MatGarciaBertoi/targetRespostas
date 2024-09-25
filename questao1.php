<?php
function isFibonacci($num) {
    if ($num < 0) {
        return false; 
    }

    // começa a sequência com os dois primeiros números
    $a = 0;
    $b = 1;

    // Itera até que o valor da sequência seja maior ou igual ao número informado
    while ($a <= $num) {
        if ($a == $num) {
            return true; // Número encontrado na sequência
        }
        // Cálculo do próximo valor da sequência
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return false; // Número não pertence à sequência
}

// Solicita o número de entrada do usuário
$numero = intval(readline("Digite um número para verificar se pertence à sequência de Fibonacci: "));

// Verifica se o número pertence à sequência
if (isFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.\n";
} else {
    echo "O número $numero não pertence à sequência de Fibonacci.\n";
}
?>
