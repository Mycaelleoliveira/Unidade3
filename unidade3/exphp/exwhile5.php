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
    <p>5.Modifique o exercício anterior para aceitar somente valores maiores que 0 para N.
      Caso o valor informado (para N) não seja maior que 0, deverá ser lido um novo valor para N.</p>
    <input type="number" name="num">
    <input type="submit" value="Vamos lá!">
  </form>
<?php

$num= $_GET["num"];

if ( $num > 0){

    $i=0;
  while ($i <= $num) {
    echo $i. " , ";
    $i++;
  }
} else {
  echo "<br/> Coloque um novo valor : ";
}

?>

</body>

</html>

