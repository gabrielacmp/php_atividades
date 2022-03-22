<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 14</title>
    </head>
    <body>
        <p>Exercício 14: Escreva um programa para ler o salário mensal de um funcionário e o percentual de reajuste. Calcular e escrever o valor do novo salário.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="realID">Digite o salário mensal:</label>
                    <br>
                    <input type="text" name="txtReal" id="realID" required>
                </div>
                <div>
                    <label for="taxaID">Digite o % de reajuste:</label>
                    <br>
                    <input type="text" name="txtTaxa" id="taxaID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
    </body>
</html>
<?php
    if($_GET){
        $salario = $_GET['txtReal'];
        $perc_reajuste = $_GET['txtTaxa'];
        $salario_final = $salario+($salario*($perc_reajuste/100));
        echo "Resposta: O valor reajustado é de {$salario_final} reais.";
    }   
?>
