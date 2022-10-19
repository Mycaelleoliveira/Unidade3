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
    Valor 01: <input type="number" name="numero[]"><br /><br />
    Valor 02: <input type="number" name="numero[]"><br /><br />
    Valor 03: <input type="number" name="numero[]"><br /><br />
    Valor 04: <input type="number" name="numero[]"><br /><br />
    Valor 05: <input type="number" name="numero[]"><br /><br />
    Valor 06: <input type="number" name="numero[]"><br /><br />
    Valor 07: <input type="number" name="numero[]"><br /><br />
    Valor 08: <input type="number" name="numero[]"><br /><br />
    Valor 09: <input type="number" name="numero[]"><br /><br />
    Valor 10: <input type="number" name="numero[]"><br /><br />
    <input type="submit" value="Vamos lá!">
  </form>
  <?php
  if(isset($_GET["num"])){
  $numeros = $_POST["numero"];

  for ($i = 0; $i < 10; $i++) {
    if ($numeros[$i] < 0) {
      echo "O numero " . $numeros[$i] . " e negativo<br />";
    }
  }
}
  ?>
</body>

</html>