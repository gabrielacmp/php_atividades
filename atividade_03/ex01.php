<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <div>
        <p>
            Exercício 01: Desenvolva um programa para efetuar a leitura de um valor inteiro positivo ou negativo e apresentar o número lido como sendo um valor positivo, ou seja, o programa deverá apresentar o módulo de um número fornecido.
            <br>
        </p>
        <fieldset>
            <legend>Entrada de Dados</legend>
            <form action="" method="post">
                <div>
                    <label for="numID">Digite um número:</label>
                    <br>
                    <input type="text" name="txtNum" id="numID" required>
                </div>
                <button type="submit">Calcular</button>
            </form>
        </fieldset>
        <br>
        <?php
            if($_POST){
                $num = $_POST['txtNum'];
                echo "Resposta: ";
                if($num<0)
                    echo "O módulo é ".-$num.".";
                 else
                    echo "O módulo é {$num}.";
            }
        ?>
    </div>
</body>
</html>