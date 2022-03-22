<?php
    /* Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos */
    echo "Exercício 03:	Uma conta telefônica é composta dos seguintes custos: Assinatura: R$ 32,00; Impulsos: R$ 0,09 por impulso que exceder a 90; Chamadas p/ celular: R$0,35 por impulso. Escreva um programa que monte a fórmula para calcular o valor da conta para 254 impulsos e 23 chamadas para celular imprimindo o resultado obtido.<br><br>";
    $assinatura = 32.0;
    $quant_impulsos = 254;
    $quant_chamadas = 23;
    if ($quant_impulsos > 90)
        $total_impulsos = ($quant_impulsos-90)*0.09;
    
    $total_chamadas = $quant_chamadas*0.35;
    $total_conta = $assinatura+$total_chamadas+$total_impulsos;
    echo "Resposta:<br>Total: Assinatura ({$assinatura}) + Impulsos ({$total_impulsos}) + Chamadas({$total_chamadas}) = {$total_conta} reais.";
