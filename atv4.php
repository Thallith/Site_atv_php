<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <title>Quarto exercício</title>
</head>

<body>
    <!-- Criar uma página para ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução -->

    <!-- COMENTÁRIO -->
    <!-- O código conta a quantidade de números entre 100 e 200 que foram digitados pelo usuário e exibe o resultado na tela. -->

    <h2>Intervalo de números: Leitura e ánalise entre 100 e 200</h2>

    <center>
        <form action="" method="post">
            Digite valores: <input type="text" name="valores" id="" placeholder="Separe por vírgulas"> <br>
            <input type="submit" value="Calcular"><br>
        </form>
    </center>

    <a href="index.html">Voltar</a>

    <center>
        <?php
        if ($_POST) {
            $sepac = $_POST['valores']; //Obtém os valores do formulário 
            $valores = explode(",", $sepac); //Divide a string de valores em um array, utilizando a vírula como delimitador
        

            if (!empty($valores)) { //Verifica se o array de valores não está vazio
                $total = 0; //Inicializa a varíavel de contagem
        
                foreach ($valores as $valor) { //Percorre cada valor do array
                    $valor = trim($valor); //Remove espaços em branco extras do valor
        
                    if ($valor >= 100 && $valor <= 200) { //Verifica se o valor está entre 100 e 200
                        $total++; //Inclementa o contador se a condição for verdadeira
        
                    }

                }
                echo "<h3>Total de números entre 100 e 200:</h3>"; //Exibe um cabeçalho na tela tela
                echo $total; //Exibe o valor da varíavel de contagem
        
            }
        }

        ?>
    </center>

    <!-- DESCRIÇÃO
    Neste código, o formulário envia os valores para a página atual via POST. O código obtém os valores do formulário usando '$_POST['valores']' e os divide em array utilizando 'explode(",", $sepac)', considerando a vírgula como delimitador.
    
    Em seguida, o código Verifica se o array de valores não está vazio com 'if(!empty($valores))', se o array não estiver vazio, um contador '$total' é inicializado.

    O código utiliza um loop 'foreach' para percorrer cada valor do array. Para cada valor, ele remove espaços branco extras utilizando 'trim($valor)'. Em seguida, verifica se o valor está entre 100 e 200 com 'if($valor >= 100 && $valor <= 200)'.
    Se a condição for verdadeira, o contador '$total' é inclementado.

    Após percorrer todos os valores, o código exibe um cabeçalho '<h3>' na tela, indicando o que está sendo exibido. Em seguida, exibe o valor do contador '$total' usando 'echo $total'. -->


</body>

</html>