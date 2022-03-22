<?php
    /* Rio, 13/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos */
     echo "Exercício 01: Desenvolva um programa para dado o preço de um produto, calcular o novo preço com desconto de 9%. <br><br>";
    $preco = 850;
    $desconto = $preco - ($preco*0.9);
    $preco_descontado = $preco - $desconto;
    echo "Resposta: O desconto do produto, que custa {$preco} reais, foi de {$desconto} reais. Sendo o valor final {$preco_descontado} reais.";
?>