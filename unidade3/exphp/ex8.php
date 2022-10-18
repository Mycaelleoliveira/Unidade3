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
    <p>Ler um valor inteiro (aceitar somente valores entre 1 e 10) e escrever a tabuada de 1 a 10 do valor lido.</p>
    Digite o número:<input type="number" name="tabuada">
    <input type="submit" value="Vamos lá!">
  </form>
  <?php
$tabuada= $_GET["tabuada"];
$i=1;
if ($tabuada >0 && $tabuada <=10) {
  do {
    $calculo= $tabuada * $i;
    echo " <br/>" .$tabuada. " x " .$i. " = " .$calculo;
    $i++;
  } while ($i <= 10);
} else {
  echo "<br/> Somente números menores que 10, tente novamente ! ";
}

  ?>
</body>

</html>