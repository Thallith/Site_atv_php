<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="estilo.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exercício</title>
</head>

<body>
    <!-- Criar uma página que leia um número e imprima todos os números de 1 até o número informado e o seu produto. -->


    <!-- COMENTÁRIOS -->
    <!-- O código calcula o produto dos números de 1 a $numero(numero escolhido pelo usuário) e exibe o resultado na tela, juntamente com uma visualização dos números individuais -->
    <center>
        <h2>Gerador de sequência: Números e Produtos</h2>
        <form action="" method="post">
            Digite um número: <input type="number" name="numero" id="">
            <input type="submit" value="Imprimir">
        </form>

        <a href="index.html">Voltar</a>
    </center>

    <center>
        <?php

        /*$i é uma varíavel de controle usada nas estruturas de repetição (como for e while) para controlar o fluxo de execução do código.
        Ele é uma conveção de nomenclatura comumente utilizado para representar o contador de iterações em um loop, sendo inclementeado ou declementado dependendo da lógica*/

        if ($_POST) {
            $numero = $_POST['numero'];
            $produto = 1;

            //for (inicialização; condição; inclemento/decremento)
            for ($i = 1; $i <= $numero; $i++) {
                echo $i . "<br>";
                $produto *= $i;

            }
            echo "<h2>Produto:</h2>";
            echo $produto;

        }

        ?>
    </center>

    <!-- DESMEMBRANDO -->
    <!-- 1 - '$numero = $_POST['numero'];':Essa linha atribui o valor do parâmetro 'numero' enviado através de um formulário POST à varíavel '$numero'. 

    2 - '$produto = 1;': Aqui, a varíavel '$produto' é inicializada com o valor 1. Ela será usada para calcular o produto dos números.

    5 - 'for ($i = 1; $i <= $numero; $i++){': Esta é uma estrutura de loop 'for', que inicializa a varíavel do controle '$i' como 1, executa o loop enquanto '$i' for menor ou igual ao valor de '$numero' e inclementa '$i' em 1 a cada iteração.

    6 - 'echo $i. "<br>";': Dentro do loop, esse comando exibe o valor atual de '$i' seguido de uma quebra de linha('<br>'). Isso imprimirá na tela os números de 1 a '$numero' com cada número em uma nova linha.

    7 - '$produto *= $i;': Dentro do loop, o valor de '$i' é multiplicado ao valor atuall de '$produto' usando o operador de multiplicação combinado ('*='). Isso atualiza o valor de '$produto' a cada iteração, multiplicando o valor anterior pelo próximo número.
                    $produto *= $i -> $produto = $produto * $i

    8 - 'echo "<h2>Produto:</h2>";': Após o loop, essa linha imprime a tag HTML '<h2>' "Produto:" na tela.

    9 - 'echo $produto;': Esta linha imprime o valor final do produto na tela.

 -->

</body>

</html>