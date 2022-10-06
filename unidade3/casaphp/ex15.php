<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex15.php" method="post">
    <p>Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.</p>
    Area: <input type="number" name="area">
    <button type="submit">Calcular</button>

  </form>
  <?php
  $area= $_POST["area"];
  $litro= $area/3;
  $latas= ceil($litro / 18);

  $valor = $latas * 80;

  echo "<br/>Latas : " .$latas;
  echo "<br/>Valor: " .$valor . " reais";


  ?>
</body>

</html>