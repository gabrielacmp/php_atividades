<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <div>
        <p>
            Exercício 04: Desenvolva um programa para ler um valor inteiro e apresentar: 
                a.	Exibir a mensagem “número negativo” se n < 0. //
                b.	Exibir a mensagem “zero” se n = 0. //
                c.	Exibir a mensagem “número positivo” se n > 0.
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
                    echo "O número {$num} é negativo.";
                elseif ($num==0)
                    echo "O número {$num} é zero.";
                else
                    echo "O número {$num} é positivo.";
            }
        ?>
    </div>
</body>
</html>