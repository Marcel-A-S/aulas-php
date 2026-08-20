<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>

    <div class="container">

        <h1>Recebendo o processamento de dados</h1>
        <hr>

        <?php
        //Capturando os dados de cada campo
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST["mensagem"];
        $interesses = $_POST["interesses"]; // Array
        $informativos = $_POST["informativos"];
        ?>

        <h2>Dados recebidos</h2>
        <p>Nome: <?= $nome ?></p>
        <p>E-mail: <?= $email ?></p>
        <p>Idade: <?= $idade ?> anos</p>
        <p>Mensagem: <?= $mensagem ?></p>
        <p>Interesses: <?= implode(", ", $interesses) ?></p>
        <p>Informativos: <?= $informativos ?></p>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>





</body>

</html>