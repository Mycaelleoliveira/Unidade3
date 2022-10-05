<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post" action="ex1.php">
    <p>Escreva um programa que pede o raio de um círculo, e em seguida exiba o
    perímetro e área do círculo. Para saber o valor do pi, use: M_PI (ele armazena
    o valor de pi)</p>

    <label>Digite o valor do raio:
      <input type="number" name="raio" />
    </label>
    <button type="submit">Calcular</button>
  </form>

  <hr />

  <?php
    $raio = $_POST["raio"];
    $perimetro = 2 * M_PI * $raio;
    $area = M_PI * $raio * $raio;

    echo "Perimetro: {$perimetro}<br />Area: {$area}";
  ?>
</body>

</html>