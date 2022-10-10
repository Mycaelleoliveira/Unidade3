<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica3.php" method="get">
        <p>Vamos somar:</p>
        Digite o 1° número: <input type="number" name="num1"/><br/><br/>
        Digite o 2° número:  <input type="number" name="num2"/><br/><br/>
        Qual a operação desejada? <input type="text" name="operacao"/>
        <input type="submit" value="Calcular"/>

    </form>

    <?php

    $num1= $_GET["num1"];
    $num2= $_GET["num2"];
    $operacao= $_GET["operacao"];

    if ($operacao == "+" ) {
        $aux= $num1 + $num2;
        echo "<br/> A soma de " .$num1. " com " .$num2. " é : " .$aux;
    } else if ($operacao == "-" ) {
        $aux2= $num1 - $num2;
        echo "<br/> A diferença de " .$num1. " com " .$num2. " é : " .$aux2;
    }  else if ($operacao == "*" ) {
        $aux3= $num1 * $num2;
        echo "<br/> A multiplicação de " .$num1. " com " .$num2. " é : " .$aux3;
    } else if ($operacao == "/" ) {
        $aux4= $num1 / $num2;
        echo "<br/> A divisão de " .$num1. " com " .$num2. " é : " .$aux4;
    } else {
        echo "Operacão inválida.";
    }
    

    ?>
</body>
</html>