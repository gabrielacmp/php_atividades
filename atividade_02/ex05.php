<?php
    /* Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos */
    echo "Exercício 05:	Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações. A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4) / (1+2+3+4), onde N1 é a nota da primeira avaliação, N2 a da segunda, etc. Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. Faça um programa que calcula e escreva a média deste aluno.<br><br>";
    $n1 = 8.0;
    $n2 = 7.5;
    $n3 = 10.0;
    $n4 = 9.0;
    $media = (($n1*1)+($n2*2)+($n3*3)+($n4*4))/(1+2+3+4);
    echo "Resposta: A média do Aluno foi {$media}.";
