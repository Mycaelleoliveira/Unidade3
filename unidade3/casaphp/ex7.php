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
    <p>7.Faça um script que pergunte quanto você ganha por hora e o número de
      horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido
      mês.</p>

    <label>Digite seu salário por hora:
      <input type="number" name="salario" />
    </label>
    <br />
    <label>Quantas horas você trabalha no mês:
      <input type="number" name="horas" />
    </label>

    <button type="submit">Calcular</button>
  </form>

  <hr />

  <?php
  $salario = $_POST["salario"];
  $horas = $_POST["horas"];
  $salario_total = $salario * $horas;

  echo "Salário no mês: {$salario_total} reais";
  ?>
</body>

</html>