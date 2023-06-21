<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <title>Quinto exercício</title>
</head>

<body>
    <!-- Chico tem 1.50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja mior que Chico -->

    <!-- COMENTÁRIO -->
    <!-- O código é um algoritmo para calcular quantos anos serão necessários para que a altura de Juca seja maior que a altura de Chico. -->

    <center>
        <h2>Altura em anos: Cálculo de tempo</h2>
        <form action="" method="post">
            Altura de Chico: <input type="text" name="alturaChico" id=""><br>
            Altura de Juca: <input type="text" name="alturaJuca" id=""><br>
            <input type="submit" value="Calcular">

            <p>Chico cresce 2 centímetros por ano</p>
            <p>Juca cresce 3 centímetros por ano</p>
        </form>

    </center>


    <center>
        <?php
        if ($_POST) {
            $alturaChico = $_POST['alturaChico'];
            $alturaJuca = $_POST['alturaJuca'];
            $crescChico = 0.02; // (2 centímetros)
            $crescJuca = 0.03; // (3 centímetros)
            $anos = 0;

            /*Neste trecho, temos um loop 'while' que será executado enquanto a altura de Chico for menor ou igual a altura de Juca. A cada iteração do loop, as alturas de Chico e Juca são atualizadas adicionando o crescimento correspondente, a variável '$anos' é inclementada em 1 a cada iteração*/
            while ($alturaJuca < $alturaChico || $alturaJuca == $alturaChico) {
                $alturaChico += $crescChico;
                $alturaJuca += $crescJuca;
                $anos += 1;
            }
            echo "<h3>Serão necessários: $anos" . " anos para Juca ultrapassar Chico</h3>"; //O resultado é exibido utilizando a função 'echo'.
        }



        ?>
             <a href="index.html">Voltar</a>

    </center>
</body>

</html>