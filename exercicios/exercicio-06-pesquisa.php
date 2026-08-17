<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-06-pesquisa de Funções do PHP</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>



    <h1>Pesquisa de funções do PHP <b>data, hora, dia, mês e ano.</b> </h1>
    <hr>


    <ul>
        <li>time </li>
        <li>getdate</li>
        <li>mktime</li>
        <li>checkdate</li>
    </ul>
    <hr>


    <p>Função<b> time </b>Trabalha com as datas e horários, comparar datas, calcular diferenças de tempo, criar códigos com validade e controlar as sessões.</p>
    <hr>

    <p>Função <b> getdate </b> transforma uma data e hora em várias informações organizadas em um array, pega o horário atual e separa em dia, mês, ano, hora, minuto, segundo etc. </p>
    <hr>

    <p>Função <b>mktime </b> é usada para criar um timestamp Unix a partir de valores de data e hora informados manualmente.
        Ela é muito útil para cálculos de datas e validação, pois ajusta automaticamente os valores fora do intervalo. </p>
    <hr>

    <p>Função <b> checkdate </b> é usada para validar se uma data é real e se é possível no calendário, e verifica se o mês, dia e ano informados formam uma data válida considerando o limites de dias por mês.</p>
    <hr>

    <h2>Exemplo de time:</h2>
    <?php

    $agora = time();

    echo "O horário atual é: " . $agora;

    ?>
    <hr>

    <h2>Exemplo de getdate:</h2>

    <?php
    $data = getdate();
    echo "Hoje é dia " . $data["mday"];
echo "<br>";
echo "Este mês é " . $data["mon"];
echo "<br>";
echo "Este ano é " . $data["year"];
    
    ?>

    <hr>


    <h2>Exemplo de mktime:</h2>

    <?php
    $data = mktime(10, 30, 0, 8, 17, 2026);
    echo date("d/m/Y", $data);
    ?>

    <hr>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>