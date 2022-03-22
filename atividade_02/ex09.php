<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 09</title>
    </head>
    <body>
        <p>Exercício 09: Ler dois números inteiros informados pelo usuário, dividi-los, apresentar o resultado da divisão real desses números, o quadrado do primeiro número e o cubo do segundo número.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="numID">Digite um número:</label>
                    <br>
                    <input type="text" placeholder="Pode ser zero" name="txtNum1" id="numID" required>
                </div>
                <div>
                    <label for="numID">Digite outro número:</label>
                    <br>
                    <input type="text" placeholder="Diferente de zero" name="txtNum2" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
    </body>
</html>
<?php
    if($_GET){
        $num1 = $_GET['txtNum1'];
        $num2 = $_GET['txtNum2'];
        $divisao = $num1/$num2;
        $quadrado = $num1**2;
        $cubo = $num2**3;
        echo "Resposta: A divisão deu {$divisao}, o quadrado do primeiro {$quadrado} e o cubo do segundo {$cubo}.";
    }   
?>
