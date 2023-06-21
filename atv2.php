<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <title>Segundo exercício</title>
</head>

<body>

    <!-- Criar uma página para o usuário entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir -->

    <!-- COMENTÁRIO -->
    <!-- O código imprime a string "SOL" várias vezes, onde o número de repetições é determinado pelo valor fornecido pelo usuário através do formulário -->
    <center>
        <h2>Palavra Multiplicada SOL: Imprimi quantas vezes desejar</h2>
        <form action="" method="post">
            Digite um número: <input type="number" name="numero" id="">
            <input type="submit" value="Imprimir">
        </form>
    </center>
    <a href="index.html">Voltar</a><br><br>

    <!-- DESMEMBRANDO -->

    <!-- 1 - '$valor = $_POST['numero']': Essa linha atribui o valor do parâmetro 'numero' enviado através de um formulário POST à varíavel '$valor'.

    2 - 'for ($i = 1; $i <= $valor; $i++)': Esta é uma estrutura de loop 'for' que inicializa a variável de controle '$i' como 1, executa o loop enquanto '$i' for menor ou igual ao valor '$valor' e inclementa '$i' em 1 a cada iteração.

    3 - 'echo "SOL <br>"': Dentro do loop, esse comando imprime a string "SOL" seguida de uma quebra de linha (<'br>') na tela. A string "SOL" será impressa repetidamente com base no valor de '$valor'. -->

    <center>
        <?php
        if ($_POST) {
            $valor = $_POST['numero'];
            for ($i = 1; $i <= $valor; $i++)
                echo "SOL <br>";
        }
        ?>
    </center>

</body>

</html>