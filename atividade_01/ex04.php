<?php
    /* Rio, 13/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos*/
    echo "Exercício 04: Uma revendedora de carros paga aos seus vendedores um salário mensal fixo de R$ 800,00 mais uma comissão de R$ 300,00 por carro vendido. Faça um programa que dada a quantidade de carros vendidos pelo funcionário, calcule e mostre o seu salário total.<br><br>";
    $fixo = 800;
    $comissao = 300;
    $carros_vendidos = 15;
    $salario_total = ($carros_vendidos*$comissao)+$fixo;
    echo "Resposta: De acordo com o número de carros vendindos no mês ({$carros_vendidos}), vezes a comissão ({$comissao}), mais o salário fixo ({$fixo}), o salário total do vendedor foi de {$salario_total} reais.";
?>