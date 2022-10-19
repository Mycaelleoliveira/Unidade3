<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="get">
    <p>1.Ler um valor e escrever se é positivo, negativo ou zero. </p>
    Digite aqui:<input type="number" name="valor">
    <input type="submit" value="Enviar">
  </form>
  <?php
  $valor= $_GET["valor"];
  if ($valor == 0) {
    echo "<br/>Seu valor é zero. ";
  } elseif ($valor <0) {
    echo "<br/>Seu valor é negativo. ";
  } else  {
    echo "<br/>Seu valor é positivo. ";
  }
  
  ?>
</body>

</html>