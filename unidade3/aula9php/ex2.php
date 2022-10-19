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
    <p>2.Ler 3 valores (considere que não serão informados valores iguais) e escrever o maior deles.</p>
    Primeiro valor:<input type="number" name="um"><br /><br />
    Segundo valor:<input type="number" name="dois"><br /><br />
    Terceiro valor:<input type="number" name="tres"><br /><br />
    <input type="submit" value="Enviar">
  </form>
  <?php
  $um= $_GET["um"];
  $dois= $_GET["dois"];
  $tres= $_GET["tres"];
if ( $um > $dois  && $um > $tres) {
  echo "<br/> Meu maior valor é : " .$um;
} elseif ($dois > $um && $dois > $tres) {
  echo "<br/> Meu maior valor é : " .$dois;
} else {
  echo "<br/> Meu maior valor é : " .$tres;
}
  ?>
</body>

</html>