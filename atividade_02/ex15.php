<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 15</title>
    </head>
    <body>
        <p>Exercício 15: Calcular o salário líquido de uma pessoa. São fornecidos: o valor por hora, o número de horas trabalhadas e o % de desconto do INSS.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="realID">Digite valor por hora:</label>
                    <br>
                    <input type="text" name="txtReal" id="realID" required>
                </div>
                <div>
                    <label for="horaID">Número de horas trabalhas:</label>
                    <br>
                    <input type="text" name="txtHora" id="horaID" required>
                </div>
                <div>
                    <label for="taxaID">Digite o % de desconto:</label>
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
        $valor_hora = $_GET['txtReal'];
        $horas_trab = $_GET['txtHora'];
        $perc_desconto = $_GET['txtTaxa'];
        $salario_bruto = $valor_hora*$horas_trab;
        $salario_final = $salario_bruto - ($salario_bruto*($perc_desconto/100));
        echo "Resposta: O salário líquido é de {$salario_final} reais.";
    }   
?>