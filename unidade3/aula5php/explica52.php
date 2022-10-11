<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p> Vamos calcular seu reajuste?</p>
        Digite seu salário: <input type="number" name="salario">
        <input type="submit" value="calcular">
    </form>

    <?php
    $salario= $_GET["salario"];

   if ($salario < 280) {
    $porcentagem = 20;

   } elseif ($salario >= 280 && $salario <700) {
      $porcentagem = 15;
   } elseif ($salario >= 700 && $salario <1500) {
    $porcentagem = 10;
   } else {
    $porcentagem = 5;
  }
  
  $reajuste= ($porcentagem/100) * $salario;
  $total = $reajuste + $salario;
  echo "<br/> Salário antes do reajuste : " .$salario. " com ".$porcentagem."% de reajuste : " .$reajuste. " Seu salário atual será: " .$total;
    
    ?>

</body>
</html>
