<?php
    /* Rio, 13/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos*/
    echo "Exercício 03: Escreva um programa que dados os litros gastos, os quilômetros percorridos por um automóvel e o valor do litro de combustível, calcule os gastos de combustível em reais/km.<br><br>";
    $quilometros = 1200;
    $litro_gasto = 15;
    $valor_litro = 5;
    $gasto_combustivel = (($valor_litro*$litro_gasto)/$quilometros); 
    echo "Resposta: Dado a quilometragem do percurso ({$quilometros} km), o total de litros gastos ({$litro_gasto} litros) e o valor do litro do combustível ({$valor_litro} reais), o cálculo do gasto do automóvel foi de {$gasto_combustivel} reais/km.";
?>