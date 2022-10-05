<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post" action="">
    <p>6.Faça um script que calcule a área de um quadrado, em seguida mostre o
      dobro desta área para o usuário.</p>

    <label>Digite a largura do quadrado:
      <input type="number" name="largura" />
    </label>
    <br />
    <label>Digite a altura do quadrado:
      <input type="number" name="altura" />
    </label>

    <button type="submit">Calcular</button>
  </form>

  <hr />

  <?php
  $largura = $_POST["largura"];
  $altura = $_POST["altura"];
  $area = $largura * $altura;
  $dobroarea = $area * 2;
  echo "Área: {$area}<br />Dobro da área: {$dobroarea}";
  ?>
</body>

</html>