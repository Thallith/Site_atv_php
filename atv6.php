<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <title>Sétimo exercício</title>
</head>

<body>
    <!-- Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmo que imprima o tempo necessário para que a massa desse material seja menor que 0.10 -->

    <center>
        <h2>Cálculo da Massa</h2>
        <form action="" method="post">
            Digite o valor da massa: <input type="text" name="massaInicial" id=""><br><br>
            <input type="submit" value="Calcular">
        </form>
    </center>



    <center>
        <?php
        if ($_POST) {
            $massaInicial = $_POST['massaInicial'];
            $tempo = 0; //(tempo em segundos)
        
            //Enquanto a massa for maior ou igual a 0.10
            while ($massaInicial > 0.10 || $massaInicial == 0.10) {
                $massaInicial = $massaInicial - ($massaInicial * 0.25); //(Perda de 25% da massa)
                $tempo += 30; //(Inclementa o tempo em 30 segundos)
            }

            echo "Tempo para a massa ser menor que 0.10 : <br> $tempo <br>";
        }


        ?>
             <a href="index.html">Voltar</a>

    </center>
</body>

</html>