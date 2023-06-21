<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo9.css">
    <title>Nono exercício</title>
</head>

<body>
    <!-- Crie uma página em PHP que receba um valor qualquer e calcule o seu fatorial (!) -->

    <!-- COMENTÁRIO
    O código calcula o fatorial do valor fornecido pelo usuário através de um formulário POST e exibe o resultado na tela. Ele só será executado se houver dados POST. -->

<center>
    <h2>Cálculo de Fatoriais</h2>
    <form method="post">
        Digite um número: <input type="text" name="valor" id="">
        <div class="btn"><input type="submit" value="Fatorial"></div>
    </form>

    <?php 
    if ($_POST){
        $valor = $_POST['valor'];
        $fatorial = 1;

        for ($i = 1; $i <= $valor; $i++)
        $fatorial *= $i;

        echo "<p>O fatorial de {$valor}! é {$fatorial}</p>";
    }

?>
     <a href="index.html">Voltar</a>


    <!-- DESMEMBRANDO 

    1 - 'if ($_POST)': Esta linha verifica se existem dados enviados através de um formulário POST. Ela inicia um bloco condicional que será executado apenas se houver dados POST.

    2 - '$valor = $_POST['valor']': Essa linha atribui o valor do parâmetro 'valor' enviado através do formulário POST à varíavel '$valor'.

    3 - '$fatorial = 1': Aqui, a varíavel '$fatorial' é inicializada com o valor 1. Essa varíavel será usada para armazenar o resultado do cálculo do fatorial.

    4 - 'for ($i = 1; $i <= $valor; $i++)': Esta é uma estrutura de loop 'for' que inicializa como 1, executa o loop enquanto '$i' for menor ou igual ao valor de '$valor' e inclementa '$i' em 1 a cada iteração.

    5 - '$fatorial *= $i': Dentro do loop,o valor de '$i' é multiplicado ao valor atual de '$fatorial' usando o operador de multiplicação combinado ('*='). Isso atualiza o valor de '$fatorial' a cada iteração, multiplicando o valor anterior pelo próximo número.
            $fatorial *= $i -> $fatorial = $fatorial * $i

     6 - 'echo "<p>O fatorial de {$valor} é {$fatorial</p>"}': Esta linha exibe uma mensagem contendo o valor original fornecido pelo usuário ('$valor') e o resultado do fatorial ('$fatorial'). A mensagem é envolta por tags HTML '<p>' para formatação.       -->
<!-- 
    
     PÂRAMETROS
     -> São informações ou valores que podem ser passados para uma função, método ou procedimento. Eles são usados para fornecer dados ou configurações necessárias para a execução da função ou para influenciar o comportamento do código -->
     </center>
    </body>

</html>