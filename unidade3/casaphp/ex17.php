<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex17.php" method="post">
    <p>Faça um script que peça o tamanho de um arquivo para download (em MB) e a velocidade de um link de Internet (em
      Mbps), calcule e informe o tempo aproximado de download do arquivo usando este link (em minutos).</p>
    Tamanho em MB: <input type="number" name="tamanho" />
    Velocidade em Mbps: <input type="number" name="velocidade" />
    <button type="submit">Calcular</button>
  </form>

  <?php
  $tamanho = $_POST["tamanho"];
  $velocidade = $_POST["velocidade"];
  $mb = $velocidade / 8;
  $tempo = ceil($tamanho / $mb);
  
  $minutos = floor($tempo / 60);
  $segundos = $tempo % 60;
  $segundos = $tempo - (60 * $minutos);

 //  resto %

  echo "<br />O download vai levar ".$minutos." minutos e ".$segundos." segundos";
  ?>
</body>

</html>