<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 03 </title>

</head>

<body>

    <h1> Condicionais e uso do PHP intercalando com HTML</h1>

    <hr>

    <?php

    $idade = 9;

    if ($idade < 12) :
        $tipoPessoa = "infantil";
        $valorDoIngresso = 25.00;

    elseif ($idade <= 60) :
        $tipoPessoa = "idoso";
        $valorDoIngresso = 40.00;

    else:
        $tipoPessoa = "adulto";
        $valorDoIngresso = 20.00;

    endif;

    ?>

    <h2> Ingressos para o Show</h2>

    <p> <?=  $tipoPessoa ?> é <?=  $valorDoIngresso ?></p>
    <p>Preço: R$ <?=  number_format($valorDoIngresso, 2, ",",".")  ?></p>
    







</body>

</html>