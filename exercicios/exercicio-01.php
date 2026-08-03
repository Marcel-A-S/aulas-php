<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 01 </title>

<style>
    body{
        background-color: #121241;
        padding: 20px;
        color: #095a347a;
    }

    .destaque{
        color: green;
            font-style: italic;
  
    }

    .curso{
        padding: 20px;
        color: #095a347a;
    }

    .horas{
        padding: 20px;
        color: #aa56127a;
    }

    .faltas{
        padding: 20px;
        color: #2c03207a;
    }
    
</style>

</head>
<body>

<?php
// Variáveis
$data = "29/07/2026"; // número real/fracionado,
$nome = "Marcelo Antônio"; // string/texto
$curso = "Informática para Internet"; // string/texto
$horas =  2000;  // número real/fracionado, decimal
$faltas = $horas * 0.25; // número real/fracionado, decimal

?>

<h1> Marcelo aluno de TI  </h1>

<p>Data de hoje: <span class="destaque"><?php echo $nome; ?></span></p>

<p>nome: <span class="curso"><?php echo $curso; ?></span></p>

<p>curso: <span class="horas"><?php echo $horas; ?></span></p>

<p>horas: <span class="horas"><?php echo $horas; ?></span></p>

 <p>faltas: <span class="destaque"><?php echo $faltas; ?></span></p>


<?php

   
?>

</body>
</html>