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
        <p>Informe o valor do salário:</p>
        <input type="number" name="salario"><br/><br/>
        <input type="submit" value="Calcular">
    </form>

    <?php

$salario= $_GET["salario"];
if ($salario < 280) {
    //$reajuste = $salario * 0.20;
    $reajuste = ($salario * 20 ) / 100;
    $novosalario = $salario + $reajuste;
    echo " <br/>Valor do reajuste : " .$reajuste;
    echo " <br/>Valor do salário : " .$salario;
    echo " <br/>Valor do novo salário : " .$novosalario;

} else if ($salario >= 280 && $salario < 700) {
    $reajuste = ($salario * 15 ) / 100;
    $novosalario = $salario + $reajuste;
    echo " <br/>Valor do reajuste : " .$reajuste;
    echo " <br/>Valor do salário : " .$salario;
    echo " <br/>Valor do novo salário : " .$novosalario;

} else if ($salario >= 700 && $salario < 1500) {
    $reajuste = ($salario * 10 ) / 100;
    $novosalario = $salario + $reajuste;
    echo " <br/>Valor do reajuste : " .$reajuste;
    echo " <br/>Valor do salário : " .$salario;
    echo " <br/>Valor do novo salário : " .$novosalario;

} else {
    $reajuste = ($salario * 5 ) / 100;
    $novosalario = $salario + $reajuste;
    echo " <br/>Valor do reajuste : " .$reajuste;
    echo " <br/>Valor do salário : " .$salario;
    echo " <br/>Valor do novo salário : " .$novosalario;
}




    ?>
</body>
</html>