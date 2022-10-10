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
    $reajuste1= (20/100) * $salario;
    $total1 = $reajuste1 + $salario;
    echo "<br/> Salário antes do reajuste : " .$salario. " com 20% de reajuste : " .$reajuste1. " Seu salário atual será: " .$total1;
   } elseif ($salario >= 280 && $salario <700) {
    $reajuste2= (15/100) * $salario;
    $total2 = $reajuste2 + $salario;
    echo "<br/> Salário antes do reajuste : " .$salario. " com 15% de reajuste : " .$reajuste2. " Seu salário atual será: " .$total2;
   } elseif ($salario >= 700 && $salario <1500) {
    $reajuste3= (10/100) * $salario;
    $total3 = $reajuste3 + $salario;
    echo "<br/> Salário antes do reajuste : " .$salario. " com 10% de reajuste : " .$reajuste3. " Seu salário atual será: " .$total3; 
   } else {
    $reajuste4= (5/100) * $salario;
    $total4 = $reajuste4 + $salario;
    echo "<br/> Salário antes do reajuste : " .$salario. " com 5% de reajuste : " .$reajuste4. " Seu salário atual será: " .$total4;
   }
   
    
    ?>

</body>
</html>

    