<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caminho 2</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header><h1>New caminho</h1></header>
<main>
<?php
      $n = $_GET["nome"];
      $s = $_GET["sobrenome"];
      echo "obrigado por visitar nosso site $n $s, volte sempre!";

?>
     <p><a href="javascript:history.go(-1)">clique aqui para voltar</a></p>
</main>
</body>
</html>