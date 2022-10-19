<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <p>Ler 10 valores e escrever quantos desses valores lidos são NEGATIVOS.</p>
    Valor 1: <input type="number" name="numero[]"><br />
    Valor 2: <input type="number" name="numero[]"><br />
    Valor 3: <input type="number" name="numero[]"><br />
    Valor 4: <input type="number" name="numero[]"><br />
    Valor 5: <input type="number" name="numero[]"><br />
    Valor 6: <input type="number" name="numero[]"><br />
    Valor 7: <input type="number" name="numero[]"><br />
    Valor 8: <input type="number" name="numero[]"><br />
    Valor 9: <input type="number" name="numero[]"><br />
    Valor 10: <input type="number" name="numero[]"><br />
    <input type="submit" value="Vamos lá!">
  </form>
  <?php
  $numeros = $_POST["numero"];

  for ($i = 0; $i < 10; $i++) {
    if ($numeros[$i] < 0) {
      echo "O numero " . $numeros[$i] . " e negativo<br />";
    }
  }
  ?>
</body>

</html>