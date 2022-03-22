<?php
    /* Rio, 13/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos */
    echo "Exercício 02: Implemente um programa para determinar o consumo médio de um automóvel através da fórmula: Consumo Médio = Distância / Litros de Combustível consumido. <br><br>";
    $distancia = 24;
    $combustivel_consumido = 2;
    $consumo_medio = $distancia/$combustivel_consumido;
    echo "Resposta: De acordo com a distância percorrida pelo automóvel ({$distancia} km) e o combustível consumido ({$combustivel_consumido} litros), o consumo médio calculado pelo sistema foi de {$consumo_medio} km/l.";
?>