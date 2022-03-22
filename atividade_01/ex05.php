<?php
    /* Rio, 13/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos*/
    echo "Exercício 05: Escreva um programa para dado o número de eleitores de um município, o número de votos brancos, nulos e válidos. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.<br><br>";
    $total_eleitores = 100000;
    $total_brancos = 10000;
    $total_nulos = 20000;
    $total_validos = 70000;
    $percentual_brancos = ($total_brancos/$total_eleitores)*100;
    $percentual_nulos = ($total_nulos/$total_eleitores)*100;
    $percentual_validos = ($total_validos/$total_eleitores)*100;
    echo "Resposta: Dado o número de eleitores ({$total_eleitores}), o total de votos em branco ({$total_brancos}), o total de votos nulos ({$total_nulos}) e o total de votos válidos ({$total_validos}), os respectivos percentuais foram {$percentual_brancos}%, {$percentual_nulos}%, {$percentual_validos}%.";
?>