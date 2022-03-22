<!-- Rio, 16/03/22. Atividade 01 - PHP com Banco de Dados. Aluna: Gabriela Rosa de Vasconcellos -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 11</title>
    </head>
    <body>
        <p>Exercício 11: Ler um número inteiro e imprimir seu sucessor e seu antecessor.<br></p>
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
        $antecessor = --$num;
        $num++;
        $sucessor = ++$num;
        echo "Resposta: O antecessor do número é {$antecessor} e o seu sucessor é {$sucessor}.";
    }   
?>