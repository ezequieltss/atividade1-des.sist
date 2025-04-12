<?php
// Declaração das três notas
$nota1 = 6.5;
$nota2 = 7.0;
$nota3 = 8.0;

// Cálculo da média
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibição da média
echo "Média: " . number_format($media, 2) . "<br>";

// Verificação do resultado
if ($media >= 7) {
    echo "Aprovado";
} elseif ($media >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>