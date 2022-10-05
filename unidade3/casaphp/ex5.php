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
    <p>5.Faça um script que converta metros para centímetros.</p>

    <label>Digite a quantidade de metros:
      <input type="number" name="metros" />
    </label>

    <button type="submit">Converter</button>
  </form>

  <hr />

  <?php
  $metros = $_POST["metros"];
  $centimetros = $metros * 100;
  echo "{$metros} metros é igual a {$centimetros} centimetros";
  ?>
</body>

</html>