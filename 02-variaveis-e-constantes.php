<!DOCTYPE html>
<html lang="pt-br">
<head>

<style>

.destaque{
    color: red;
}


</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>
</head>
<body>

<h1> Usando variaveis e constantes </h1>                         </h1>
   <hr>
  <?php

/* Variaveis */
$curso = "Tec. Informática para Internet"; // string/texto
$ano = 2026; // número real/fracionado, decimal

/* Contantes (recomenda-se declarar em MAIÚSCULA) */
define("PROPRIETARIA", "Fulano de Tal"); // antiga
const EMPRESA = "ABC Tecnologia"; //moderna
?>




<h2>  Exemplos de saída de dados </h2>
<?php
// Usando concatenação: se usa o . ( ponto final)

echo "<p> Estou fazendo ".$curso." no ano de ".$ano. "</P>";
echo "<p> Trabalho na empresa <span  class='destaque'>". EMPRESA."</span></p>";

// Usando  interpolação: se usa obrigatoriamente aspa dupla

echo "<p> Estou fazendo o curso $curso no ano de $ano </p>";

// Com aspas simples, a interpolação não funciona. aparecem os nomes.
echo '<p> Estou fazendo o curso $curso no ano de $ano </p>';

?>

<h2>  Exemplos de saídas de dados </h2>
<h3>  Usando a sintaxe abreviada/curta do PHP </h3>

<!-- Saída abreviada usando trechos de PHP INLINE -->

<p>  Estou fazendo o curso <?php echo $curso ?> no ano de <?php echo $ano?>   </p>
<p>  Trabalho na empresa <?php echo EMPRESA ?> </p>

<!-- Saída abreviada usando comando echo atraves do sinaçl de igual -->
<p>  Estou fazendo o curso <?=$curso ?> no ano de <?=$ano?>  </p>
<p>  Trabalho na empresa <sapan class="destaque"> <?=EMPRESA?></span </p>


</body>
</html>