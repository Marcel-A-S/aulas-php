<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 Estruturas de repetição</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <div class="container">


        <h1>Identificadores numérico</h1>

        <hr>

        <?php

        $linguagens = [

            [
                "id" => 1,
                "nome" => "HTML",
                "descricao" => "estruturação da página web"
            ],


            [
                "id" => 2,
                "nome" => "CSS",
                "descricao" => "Estilo da vida na página web"
            ],


            [
                "id" => 3,
                "nome" => "JS",
                "descricao" => "Back-End aplicação e processamento"
            ],


            [
                "id" => 4,
                "nome" => "SQL",
                "descricao" => "Linguagem de Consulta estruturada"
            ],

        ];

        ?>


        <?php
        foreach ($linguagens as $linguagem): // lembrar de colocar no singular

        ?>

            <p>
                <b> <?= $linguagem["id"] ?> </b>
                <?= $linguagem["nome"] ?>
                <?= $linguagem["descricao"] ?>
            </p>
        <?php
        endforeach;

        ?>

        <table class=" table table-bordered table-striped table-hover">

        <thead class="table-dark">
            <tr>
                <th> ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
            </thead>

            <tbody>

            <?php foreach ($linguagens as $linguagem): ?>

                <tr>
                    <td><?= $linguagem['id'] ?></td>
                    <td><?= $linguagem['nome'] ?></td>
                    <td><?= $linguagem['descricao'] ?></td>
                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>



</body>

</html>