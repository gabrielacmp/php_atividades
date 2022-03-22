<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <div>
        <p>
            Exercício 05: Escreva um programa para que leia um número e verifique se ele se encontra no intervalo entre 5 e 20.
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
                if($num>=5 && $num<=20)
                    echo "O número {$num} está no intervalo entre 5 e 20.";
                else 
                    echo "O número {$num} não está no intervalo entre 5 e 20.";
            }
        ?>
    </div>
</body>
</html>