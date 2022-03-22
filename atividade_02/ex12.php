<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 12</title>
    </head>
    <body>
        <p>Exercício 12: Escreva um programa que calcule e mostre o valor da conversão em dólar de um valor lido em real. O programa deverá ler o valor da cotação do dólar e a quantidade de reais.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="realID">Digite um valor em reais:</label>
                    <br>
                    <input type="text" name="txtReal" id="realID" required>
                </div>
                <div>
                    <label for="dolarID">Digite a cotação do dólar:</label>
                    <br>
                    <input type="text" name="txtDolar" id="dolarID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
    </body>
</html>
<?php
    if($_GET){
        $real = $_GET['txtReal'];
        $dolar = $_GET['txtDolar'];
        $conversao = $real/$dolar;
        echo "Resposta: O valor convertido foi {$conversao} dólares.";
    }   
?>