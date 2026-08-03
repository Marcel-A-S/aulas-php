<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>

<body>

<style>
article{
padding: 2px;
poder: solid 1px;
width: 2px;

}




</style>

    <h1>Array Associativos </h1>
    <hr>
    <?php

    // array associado

    $usuario1 = new stdClass;

    $usuario1->nome = "Marcelo Antônio";
    $usuario1->idade = 95;
    $usuario1->email = "marcelo_grl@yahoo.com.br";
    $usuario1->senha = "1234abc";
    $usuario1->sexo = "masculino";
    $usuario1->cidade = "São Paulo";


    $usuario2 = [
        "nome" => "Maria de fatima",
        "idade" => 45,
        "email" => "mariadefatima@gmail.com",
        "senha" => "123abc",
        "sexo" => "feminino",
        "cidade" => "São Paulo",
    ];


    ?>

    <article>
        <h2> Usuario <?= $usuario2['nome']; ?> </h2>
        <p> E-mail: <?= $usuario2['email'] ?> </p>
        <p> Idade: <?= $usuario2['idade'] ?> </Wp>

    </article>

    <article>
        <h2><?= $usuario1->nome ?></h2>
        <p>E-mail:<?= $usuario1->email ?> </p>
        <p>Idade: <? $usuario1->idade ?> anos</p>
    </article>


</body>

</html>