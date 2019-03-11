<?php

function calcularNota($n1, $n2, $n3){
    $notas = array($n1, $n2, $n3);
    return ($notas[0] + $notas[1] + $notas[2])/3;
}

$media = calcularNota($_GET['n1'], $_GET['n2'], $_GET['n3']);
echo "O aluno tirou $media e portanto está " 
        . ($media >= 6 ? "APROVADO!" : "REPROVADO!");