<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post" action="ex2.php">
    <p>2.Faça um Programa que peça um número e então mostre a mensagem O
      número informado foi [número].</p>

  
      <input type="number" name="numero" placeholder="Digite o número:" />
      <input type="submit" value="Ver número"/>
    
  </form>
    <br/>

  <?php
  $numero = $_POST["numero"];

  echo "Número informado: {$numero}";
  ?>
</body>

</html>