<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décimo exercício</title>
</head>

<body>
    <!-- Crie uma página em PHP que receba dois valores quaisquer e imprime todos os valores intermediários a ele -->

    <h2>Intervalo de Valores</h2>
    <form method="post">
        Digite o 1° valor: <input type="text" name="valor1" id=""><br>
        Digite o 2° valor: <input type="text" name="valor2" id=""><br>
        <input type="submit" value="Analisar">
    </form>

    <?php
    if ($_POST) {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        echo "Primeiro valor $valor1 <br><br>";
        echo "Segundo valor $valor2 <br><br>";
        echo "Intermediário: ";


        //O código realiza um loop começando a partir de '$valor1 + 1' e continua até que '$i' seja menor que '$valor2'. A cada iteração, o valor '$i' é impresso na tela, seguido por um espaço em branco. O resultador será os números intermediários entre '$valor1' e '$valor2'
        for ($i = $valor1 + 1; $i < $valor2; $i++) {
            echo $i . " ";
        }
    }


    ?>
         <a href="index.html">Voltar</a>

</body>

</html>