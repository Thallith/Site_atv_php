<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo7.css">
    <title>Sétimo exercício</title>
</head>

<body>
    <!-- Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar -->

    <!-- COMENTÁRIO
    O código percorre os valores recebidos do formulário, verifica se são pares ou ímpares e exibe a informação correspondente na tela. -->
<center>
        <h2>Ánalise de Valores: Par ou Impar</h2>
    <form action="" method="post">
        Digite valores: <input type="text" name="valores" id="" placeholder="Separe por vírgulas"><br><br>
        <div class="btn"><input type="submit" value="Analisar"></div>
    </form>

    <?php
    if ($_POST) { // Verifica se o formulário foi enviado via POST
        $sepac = $_POST['valores']; //Obtém os valores do formulário
        $valores = explode(",", $sepac); //Divide a string de valores em um array, utilizando a vírgula como delimitador


        foreach ($valores as $valor) { //Percorre cada valor do array

            $valor = trim($valor); //Remove espaços em branco extras do valor
            if ($valor % 2 == 0) { //Se o resto da divisão do valor por 2 for igual a 0, é considerado par

                echo $valor . " - PAR <br>"; //Exibe o valor seguido de "PAR", realizando quebra de linha (<br>), cada elemento um embaixo do outro

            } else { //Caso contrário, o valor é considerado impar
                echo $valor . " - IMPAR <br>"; // Exibe o valor seguido de "IMPAR"
            }
        }
    }

    ?>
         <a href="index.html">Voltar</a>

</center>

    <!-- DESCRIÇÃO
    Este código verifica se um formulário foi enviado via POST('if ($_POST)'), se o formulário foi enviado, ele obtém os valores do campo/input chamado "valores" ('$sepac = $_POST['valores']') e os divide em um array utilizando a função 'explode()', considerando a vírgula como delimitador ('$valores = explode(",", $sepac)').
    Em seguida, o código percorre cada valor do array utilizando um loop 'foreach'. Para cada valor, é realizado as seguintes operações:

    - Remoção de espaços em branco extras do valor utilizando a função 'trim()' -> ('$valor = trim($valor)').

    - Verifica se o valor é divisivel por 2,utilizando o operador '%'(resto da divisão por 2), se o resto for igual a 0, o valor é considerado par.
     E se o valor for par, ele é exibido seguido pela string "PAR" ('echo $valor . " - PAR <br>"') e realizando ao final uma quebra de linha.

     - Caso contrário, ou seja, se o valor for impar, ele é exibido seguido da string "ÍMPAR" ('echo $valor . " - ÍMPAR <br>"'), e realizando ao final uma quebra de linha para os elementos ficarem um embaixo do outro -->
</body>

</html>