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
    <p>4.Faça um script que peça as 3 notas de um aluno e mostre a média.</p>

    <label>Digite a nota 1:
      <input type="number" name="num1" />
    </label>
    <br />
    <label>Digite a nota 2:
      <input type="number" name="num2" />
    </label>
    <br />
    <label>Digite a nota 3:
      <input type="number" name="num3" />
    </label>

    <button type="submit">Calcular média</button>
  </form>

  <hr />

  <?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];
  $media = ($num1 + $num2 + $num3) / 3;

  echo "Média das notas: {$media}";
  ?>
</body>

</html>