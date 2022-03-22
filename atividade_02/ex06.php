<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 06</title>
    </head>
    <body>
        <p>Exercício 06: Escreva um programa que obtêm dois valores inteiros (variáveis A e B) e apresente as operações de adição, subtração, multiplicação e divisão de A por B.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="numID">Digite o valor de A:</label>
                    <br>
                    <input type="text" name="txtNum1" id="numID" required>
                </div>
                <div>
                    <label for="numID">Digite o valor de B:</label>
                    <br>
                    <input type="text" name="txtNum2" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
    </body>
</html>
<?php
    if($_GET){
        $a = $_GET['txtNum1'];
        $b = $_GET['txtNum2'];
        $adicao = $a+$b;
        $subtracao = $a-$b;
        $multiplicacao = $a*$b;
        $divisao = $a/$b;
        echo "Resposta:<br>O resultado das operações de acordo com as variáveis A({$a}) e B({$b}) serão apresentadas abaixo:<br>1. Adição: {$adicao};<br>2. Subtração: {$subtracao};<br>3. Multiplicação: {$multiplicacao};<br>4. Divisão: {$divisao};";
    }
?>