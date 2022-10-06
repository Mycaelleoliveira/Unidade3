<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="ex11.php" method="post">
    <p>Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a
      seguinte fórmula: (72.7*altura) - 58 </p>
    <input type="text" name="altura" />
    <button type="subimt">Calcular</button>

  </form>
  <br />
  <?php
    $altura = $_POST["altura"];

    $peso= (72.7*$altura) -58;

    echo "<br/>Seu peso ideal é : " .$peso;

    ?>

</body>

</html>