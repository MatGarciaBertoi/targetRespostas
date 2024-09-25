<?php
function contarLetrasA($str) {
    // Conta quantas vezes 'a' (minúscula) aparece na string
    $quantidadeMin = substr_count($str, 'a');
    
    // Conta quantas vezes 'A' (maiúscula) aparece na string
    $quantidadeMai = substr_count($str, 'A');

    return [$quantidadeMin, $quantidadeMai];
}

// Solicita uma string de entrada do usuário
$string = readline("Digite uma palavra: ");

// Conta quantas vezes a letra 'a' aparece (maiúscula e minúscula)
list($quantidadeMin, $quantidadeMai) = contarLetrasA($string);

// Exibe o resultado
$total = $quantidadeMin + $quantidadeMai;
if ($total > 0) {
    echo "A letra 'a' aparece $total vezes sendo $quantidadeMai maiúsculas e $quantidadeMin minúsculas.\n";
} else {
    echo "A letra 'a' não aparece na string.\n";
}
?>
