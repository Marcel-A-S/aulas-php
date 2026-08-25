<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício-07 Formulário</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

  <div class="container">

    <h1>Formulário para cadastro </h1>
    <hr>

    <form action="processamento.php" method="post">
      <p>
      <div class="mb-3">
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome"> </p>

      </div>

      <div class="mb-3">
        <p>
          <label
            for="fabricante">Fabricante:</label><br>
          <select name="fabricante" id="fabricante">
            <option value="">Escolha um fabricante</option>
            <option value="lg">LG</option>
            <option value="panasonic">Panasonic</option>
            <option value="sonic">Sonic</option>
            <option value="philips">Philips</option>
          </select>
        </p>
      </div>


      <p>
      <div>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01">

        </p>

      </div>

      <div>
        <p>
          <label for="quantidade">Quantidade:</label>
          <input type="number" name="quantidade" id="idade" min="0" max="1000" step="1">
        </p>
      </div>


      <button type="submit" class="btn btn-primary">Enviar dados</button>

      <?php

      ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>




</body>

</html>