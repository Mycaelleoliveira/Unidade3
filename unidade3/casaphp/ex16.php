<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex16.php" method="post">
    <p>Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
      preços em 3 situações:</p>
    Largura: <input type="number" name="largura">
    <br />
    Altura: <input type="number" name="altura">
    <button type="submit">Calcular</button>

  </form>
  <?php
  $largura = $_POST["largura"];
  $altura = $_POST["altura"];
  $area = $largura * $altura;

  $litros = $area/6;

  $latas = ceil($litros / 18);
  $galoes = ceil($litros / 3.6);

  $valor_latas = $latas * 80;
  $valor_galoes = $galoes * 25;

  // floor(5.2) => 5 // arredondar pra baixo
  // ceil(5.2) => 6 // arredonda para cima
  // round(5.6) => 6 // arredonda para cima caso o valor seja maior que 0,5


  echo "<br/>Quantidade de litros necessaria: " . $litros . " litros";
  echo "<br/>Apenas 18 litros : " .$latas. " com valor: " .$valor_latas . " reais";
  echo "<br/>Apenas 3,6 litros: " .$galoes. " com valor: " .$valor_galoes . " reais";
  

  ?>
</body>

</html>