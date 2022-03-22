<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 13</title>
    </head>
    <body>
        <p>Exercício 13: Ler um valor e imprimir esse valor com reajuste de 10%.<br></p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="get">
                <div>
                    <label for="realID">Digite um valor:</label>
                    <br>
                    <input type="text" name="txtReal" id="realID" required>
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
        $reajuste = $real+($real*0.1);
        echo "Resposta: O valor reajustado é de {$reajuste} reais.";
    }   
?>
