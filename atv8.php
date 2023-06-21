<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo8.css">
    <title>Oitavo exercício</title>
</head>

<body>

    <!-- Crie uma página em PHP que receba um valor qualquer e imprima os valores de 0 até o valor recebido, exempl -->

    <!-- COMENTÁRIO -->
    <!-- O código exibe o valor recebido do usuário, seguido de uma sequência de números de 0 até o número fornecido pelo usuário através de um formulário POST. Cada número será impresso na mesma linha separado por vírgulas, o código só será executado se houver dados POST -->
<center>
        <h2>Geração e Impressão de Valores</h2>
    <form method="post">
        Digite um valor: <input type="text" name="numeros"></br>
        <div class="btn"><input type="submit" value="Imprimir"></div>
    </form>



    <?php
    if ($_POST) {
        $numeros = $_POST['numeros'];

        //for (inicialização, condição, inclemento
        echo "<h4>Valor recebido:</h4> {$numeros}";
        echo "<h4>Impressão do programa:</h4>";


        for ($i = 0; $i <= $numeros; $i++)
            echo $i . ",";
    }

    ?>
         <a href="index.html">Voltar</a>


    <!-- DESMEMBRANDO 
    1 -  'if ($_POST)': Esta linha verifica se existem dados enviados através de um formulário POST. Ela inicia um bloco condicional que será executado apenas se houver dados POST.

    2 - '$numeros = $_POST['numeros']': Essa linha atribui o valor do parâmetro 'numero' enviado através do formulário POST à varíavel '$numeros'.

    3 - 'echo "<h4> Valor recebido:</h4> {$numeros}"': Essa linha exibe o texto "Valor recebido: " seguido do valor armazenado em '$numeros'. O valor é mostrado dentro de tags HTML '<h4>'.

    4 - 'echo "<h4>Impressão do programa: </h4>"': Essa linha exibe o texto "Impressão do programa:" dentro de tags HTML '<h4>'.

    5 - 'for ($i = 0; $i <= $numeros; $i++)': Esta é uma estrutura de loop 'for' que inicializa a varíavel de controle '$i' como 0, executa o loop enquanto '$i' for menor ou igual ao valor de '$numeros' e inclementa '$i' em 1 a cada iteração.

    6 - 'echo $i . ","': Dentro do loop esse comando imprime o valor atual de '$i' seguido de uma vírgula. Isso resultará na impressão de uma sequência de números separados por vírgulas. -->

    </center>

</body>

</html>