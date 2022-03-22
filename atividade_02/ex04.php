<?php
    /* Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos */
    echo "Exercício 04:	Fazer um programa que imprima a média dos números 11, 19 e 7. <br><br>";
    $numeros = array(11,19,7);
    echo "Resposta: <br>";
    for($i=0;$i<sizeof($numeros);$i++){
        echo "\$numeros[$i]: ".$numeros[$i]."<br>";
    };
    echo "Soma dos números na Array: ";
    print_r(array_sum($numeros));
    echo "<br>";
    echo "Divisão dos números na Array: ";
    print_r (array_sum($numeros)/sizeof($numeros));
