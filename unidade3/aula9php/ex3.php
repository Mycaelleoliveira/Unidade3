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
    <p>3.Ler 3 valores (considere que não serão informados valores iguais) e escrever a soma dos 2 maiores.</p>
    Primeiro valor:<input type="number" name="um"><br /><br />
    Segundo valor:<input type="number" name="dois"><br /><br />
    Terceiro valor:<input type="number" name="tres"><br /><br />
    <input type="submit" value="Enviar">
  </form>
  <?php
  if(isset($_GET["num"])){
  $um= $_GET["um"];
  $dois= $_GET["dois"];
  $tres= $_GET["tres"];
  $soma = 0;

  if ($um > $dois && $um > $tres) {
    $soma = $soma + $um;

    if ($dois > $tres) {
      $soma = $soma + $dois;
    } else {
      $soma = $soma + $tres;
    }
  } elseif ($dois > $um && $dois > $tres) {
    $soma = $soma + $dois;

    if ($um > $tres) {
      $soma = $soma + $um;
    } else {
      $soma = $soma + $tres;
    }
  } else {
    $soma = $soma + $tres;

    if ($um > $dois) {
      $soma = $soma + $um;
    } else {
      $soma = $soma + $tres;
    }
  }
  echo "Soma: " . $soma;
}

  
  ?>
</body>

</html>