<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-07 Processamento.PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <div class="container">

        <h1>Processamento de formulário</h1>

        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

            $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);

            $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

            if (empty($nome)) $erros[] = "O campo nome é obrigatório";
            if (empty($preco)) $erros[] = "O preco esta vazio e obrigatorio";
            if (empty($quantidade)) $erros[] = "A quantidade esta vazia tem que ser preenchida";

            if (!empty($erros)): ?>

                <div class="alert alert-danger">
                    <h2>Erros encontrados:</h2>
                    <ul class="mb-3">
                        <?php foreach ($erros as $erro): ?>
                            <li> <?= $erro ?></li>
                        <?php endforeach ?>
                    </ul>

                    <a href="17-formulario.html" class="btn btn-warning">Voltar para o fomulário</a>

                </div>
            <?php else: ?>

                <h2>Dados do formulário</h2>

                <p>nome do produto <?= $nome ?></p>
                <p>nome do fabricante <?= $fabricante ?></p>
                <p>preço do produto<?= $preco ?></p>
                <p>quantidade do produto <?= $quantidade ?></p>

        <?php

            endif;
        }
        ?>

    </div>

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>