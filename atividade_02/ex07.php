<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 07</title>
    </head>
    <body>
        <p>Exercício 07: Efetuar a leitura de um número inteiro e apresentar o resultado do quadrado deste número.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="numID">Digite um número:</label>
                    <br>
                    <input type="text" name="txtNum" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
    </body>
</html>
<?php
    if($_GET){
        $num = $_GET['txtNum'];
        $quadrado = $num**2;
        echo "Resposta: O quadrado do número é {$quadrado}."; 
    }
?>