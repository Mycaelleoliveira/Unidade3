<!--Faça um Program em que o usuário informe dois números e o programa faça a soma destes números.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="get">
        Primeiro Número: <br/> 
        <input type="number" name="num1" placeholder="Digite o 1° número"/>
        <br/> <br/>
        Segundo Número: <br/> 
        <input type="number" name="num2" placeholder="Digite o 2° número"/>
        <br/> <br/>

        <input type="submit" value="Calcular">

    </form>
    <?php
        //pegar dados do formulário
        $n1 = $_GET["num1"];   
        $n2 = $_GET["num2"]; 

        //processamento
        $somar = $n1 + $n2;
        $subtrair = $n1 - $n2;
        $Multiplicar = $n1 * $n2;
        $dividir = $n1 / $n2;

        //saida
        echo "<br/>A soma é : " .$n1. " com " .$n2. " é : " .$somar;
        echo "<br/>A subtração é : " .$n1. " com " .$n2. " é : " .$subtrair;
        echo "<br/>A multiplicação é : " .$n1. " com " .$n2. " é : " .$Multiplicar;
        echo "<br/>A divisão é : " .$n1. " com " .$n2. " é : " .$dividir;
        
      
    ?>
</body>
</html>