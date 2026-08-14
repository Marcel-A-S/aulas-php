<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>


    <h1>Variáveis para representar notas de um aluno. </h1>

     
    <?php

    // dados de entrada
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 6;

// function calcularMedia( float $n1, float $n2, float $n3)
    function calcularMedia($n1, $n2, $n3)
    {
         $media = ($nota1 + $nota2 + $nota3) / 3;
         
        return number_format($media, 1, ',', '.');
    }

    // function verificarSituacao( float$): string{
    function verificarSituacao($media)
    {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }


    $media = calcularMedia($nota1, $nota2, $nota3);
    $situacao = verificarSituacao($media);


    ?>

<?php 

if ($media >= 7) {

    $classe = "text-success";
} else {

    $classe = "text-danger";
}

?>

    <p>nota 1: <?= $nota1 ?></p>
    <p>nota 2: <?= $nota2 ?></p>
    <p>nota 3: <?= $nota3 ?></p>

    <h2>resultado</h2>

    <p>média: <?= ($media) ?></p>

    

    <h2 class="<?= $classe ?>">Situação do aluno: <?= $situacao ?></h2>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>