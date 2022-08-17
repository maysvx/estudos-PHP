<?php

$peso = 55;
$altura = 1.59;
$resultadoIMC = ($peso / ($altura * $altura));

echo "CALCULO DE IMC". PHP_EOL . PHP_EOL;
echo "SEU IMC É ------------------ $resultadoIMC". PHP_EOL;

if ($resultadoIMC < 18.5){
    echo "CLASSIFICACAO -------------- Magreza" . PHP_EOL;
    echo "GRAU DE OBESIDADE ---------- 0". PHP_EOL;  
} else if ($resultadoIMC > 18.5 && $resultadoIMC <= 24.9){
    echo "CLASSIFICACAO -------------- Normal" . PHP_EOL;
    echo "GRAU DE OBESIDADE ---------- 0". PHP_EOL;  
} else if ($resultadoIMC > 25 && $resultadoIMC <= 29.9){
    echo "CLASSIFICACAO -------------- Sobrepeso" . PHP_EOL;
    echo "GRAU DE OBESIDADE ---------- 1". PHP_EOL;  
} else if ($resultadoIMC > 30 && $resultadoIMC <= 39.9){
    echo "CLASSIFICACAO -------------- Obesidade" . PHP_EOL;
    echo "GRAU DE OBESIDADE ---------- 2". PHP_EOL;  
} else if ($resultadoIMC > 40){
    echo "CLASSIFICACAO -------------- Obesidade Grave" . PHP_EOL;
    echo "GRAU DE OBESIDADE ---------- 3". PHP_EOL;  
};