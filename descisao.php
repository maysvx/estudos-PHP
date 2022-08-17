<?php

$idade = 16;
$qndt_pessoas = 2;

echo "===== BALADA =====" . PHP_EOL . PHP_EOL;
echo "entrada permitada para mais de 18 anos." . PHP_EOL;
echo "maiores de 16 anos podem entrar acompanhados." . PHP_EOL . PHP_EOL;

if ($idade >= 18 ){
    echo "Voce tem $idade anos, pode entrar" . PHP_EOL;
    echo "Divirta-se :)";
} else if ($idade >= 16 && $qndt_pessoas > 1){
    echo "Voce tem $idade anos e esta acompanhado(a), pode entrar." . PHP_EOL;
    echo "Divirta-se :)";
} else {
    echo "voce tem $idade anos e esta desacompanhado." . PHP_EOL;
    echo "não pode entrar :(";
}