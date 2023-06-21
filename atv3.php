<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <title>Terceiro exercício</title>
</head>

<!-- Criar uma página para o usuário entrar com 20 números e imprimir a soma dos positivos e o total de números negativos -->

<!-- COMENTÁRIO
    Este código recebe uma lista de valores separados por vírgulas do usuário através de um formulário POST e realiza algumas operações com esses valores -->

<body>
    <h2>Ferramenta de ánalise númerica: Soma dos positivos e Contagem dos negativos</h2>

    <center>
        <form method="post">
            Digite valores: <input type="text" name="valores" id="" placeholder="Separe por vírgulas"> <br>
            <input type="submit" value="Cálculo"> <br>
        </form>
    </center>

    <a href="index.html">Voltar</a>

    <center>
        <?php
        if ($_POST) {
            $sepac = $_POST['valores']; //Obtém os valores do formulário enviado via POST
            $valores = explode(",", $sepac); //Divide a string de valores  em um array, utilizando a vírgula como delimitador
        
            if (!empty($valores)) { //Verifica  se o array de valores não está vazio
                $somaPO = 0; //Varíavel para armazenar a soma dos valores positivos, inicializada por 0
                $totalNe = 0; //Varíavel para armazenar o total de valores negativos, inicializada por 0
        
                foreach ($valores as $valor) { //Percorre cada valor do array
                    $valor = trim($valor); // Remove espaços em branco extras do valor
        
                    if ($valor > 0) { //Se o valor for maior que zero
                        $somaPO += $valor; //Inclementa o valor na soma dos positivos
                    } else if ($valor < 0) { //Se o valor for menor que zero
                        $totalNe++; //Inclementa o contador de negativos
                    }


                }
            }
            echo "<h2>Resultado:</h2>"; //Exibe um cabeçalho para os resultados
            echo "Soma dos valores positivos: $somaPO<br>"; // Exibe a soma dos valores positivos
            echo "Total de negativos: $totalNe"; // Exibe o total de valores negativos
        }







        ?>

    </center>

    <!-- DESCRIÇÃO

    A lista de valores enviada pelo usuário é dividida em um array utilizando a função 'explode()', considerando a vírgula como delimitador. Em seguida, cada valor do array é percorrido para realizar as seguintes operações:

    - Remover espaços em brancos extras  do valor usando a função 'trim()'.
    - Se o valor for maior que zero, ele é considerado positivo e é adicionado a soma dos valores positivos ('$somaPO'), onde a '$somaPO' receberá o valor atual somado a cada novo $valor adicionado seguinte

    - Se o valor for menor que zero, é considerado negativo, e o contador de valores negativos ('$totalNe') é inclementado. Toda vez que um valor negativo for lido, 1 será inclementado no contador '$totalNe'. -->

</body>

</html>