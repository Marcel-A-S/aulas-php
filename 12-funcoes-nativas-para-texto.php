<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para texto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>

    <div class=" conteiner">

        <h1> Funções nativas para texto</h1>
        <hr>

        <h2> mb_strlen()</h2>
        <?php


        $texto = "Uma frase qualquer, com acento e cedilha: ação, ciência";

        ?>

        <p>String do exemplo: <?= $texto  ?></p>
        <p>Tamanho da string: <?= mb_strlen($texto) ?></p>


        <h2>mb_strtoupper()</h2>
        <p>Conversão para maiúsculas: <?= mb_strtoupper($texto) ?></p>


        <h2>mb_strtolower()</h2>
        <p>Conversão para minúculas: <?= mb_strtolower($texto) ?></p>


        <h2>str_replace() ou str_ireplace</h2>

        <?php

        $frase = "Esta é uma frase com palavras feias, como burro, idiota, chato demais e outras palavras ruins (bobo,panaca etc)! Chato mesmo! BOBO pra caramba. Também é um BOBÃO";

        // Procurar por UMA palavra e substituirndo por outra
        $fraseComSubstituicaoDePalavra = str_ireplace("bobo", "cara legal", $frase);

        // Procurar por uma LISTA de palavras e substituindo por outra coisa
        $fraseCensurada = str_ireplace(
            ["panaca", "burro", "idiota", "chato", "bobão", "bobo", "BOBÃO"],
            "🤬😡",
            $frase
        );

        ?>

        <p><mark>Frase original: <?= $frase ?></mark></p>
        <p>Frase com substituição de palavras: <?= $fraseComSubstituicaoDePalavra ?></p>
        <p>Frase sensurada <?= $fraseCensurada ?></p>


        <h2>strip_tag()</h2>
        <?php
        $codigoHTML = "<h3>HTML5 - <a href= 'http://sp.senac.br'>Senac</a> </h3>";
        $textoSemTags = strip_tags($codigoHTML);

        ?>

        <div>
            <?= $codigoHTML ?>
            <?= $textoSemTags ?>

        </div>


        <div>

            <h2>\Trin()</h2>
            <?php
            $textoComEspacosAdicionais = "  Curso PHP  ";
            $textoSemEspaco = trim($textoComEspacosAdicionais);

            $textoComQuebras = "\n\n Texto qualquer e etc e tal";
            $textoSemQuabras = trim($textoComQuebras);
            ?>

            <pre><?php var_dump($textoComEspacosAdicionais) ?></pre>
            <pre><?php var_dump($textoSemEspaco) ?></pre>

            <br><br>

            <pre><?php var_dump($textoComQuebras) ?></pre>
            <pre><?php var_dump($textoSemQuabras) ?></pre>

            <h2> nl2br()</h2> <!-- new line to break -->

            <?php 
            $textoContendoQuebras = "A vida é feita de escolhas \n e a cada decisão, uma nova jornada começa. \n Às vezes, o caminho parece claro, \n mas em outras, a névoa da dúvida nos envolve. \n Mesmo assim, é importante seguir em frente. \n A coragem está em continuar, \n mesmo quando as respostas não são evidentes. \n Aprendemos com os erros e acertos, \n e cada experiência nos molda para o que está por vir. \n O segredo é nunca parar de caminhar.";
            ?>

            <p><?= $textoContendoQuebras ?></p>
            <p><?= nl2br($textoContendoQuebras)  ?></p>

            <!-- a função pega as "quebras" com \n e trasforma em <br> para o HTML -->

            <h2>explode()</h2>
            <?php 
            $linguagens = "HTML, CSS, JavaScript, PHP,Python, SQL, C#, Java";
            $arrayLinguagens = explode(",", $linguagens);
            ?>
<pre><?php  var_dump($linguagens) ?></pre>
<pre><?php  var_dump($arrayLinguagens) ?></pre>


</div>





</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>