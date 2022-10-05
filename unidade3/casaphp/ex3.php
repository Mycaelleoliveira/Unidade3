<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post" action="ex3.php">
    <p>3.Faça um script que peça dois números e imprima a soma.</p>

    <label>Digite o primeiro número:
      <input type="number" name="num1" />
    </label>
    <br />
    <label>Digite o segundo número:
      <input type="number" name="num2" />
    </label>

    <button type="submit">Somar</button>
  </form>

  <br/>

  <?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $soma = $num1 + $num2;

  echo "Soma dos números: {$soma}";
  ?>
</body>

</html>