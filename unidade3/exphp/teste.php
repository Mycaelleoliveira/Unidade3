<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form>
    <?php
      for ($i = 1; $i <= 10; $i++) {
    ?>
    Campo <?php echo $i; ?><br />
    <input type="text" name="numero<?php echo $i; ?>" /><br />
    <?php 
      }
    ?>

    <br />
    <button type="submit">Vamos la!</button>
  </form>

  <?php
    for ($i = 1; $i <= 10; $i++) {
      $numero = $_GET["numero" . $i];

      if ($numero < 0) {
        echo "Numero " . $numero . " negativo<br />";
      } else {
        echo "Numero " . $numero . " positivo<br />";
      }
    }
  ?>
</body>

</html>