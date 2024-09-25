<?php
$indice = 12; 
$soma = 0;    
$k = 1;       

// Enquanto k for menor que o índice
while ($k < $indice) {
    $k = $k + 1;      // incrementa k
    $soma = $soma + $k; // adiciona k à soma
}

// Imprimir o resultado da soma
echo "O valor da soma é: " . $soma;
?>
