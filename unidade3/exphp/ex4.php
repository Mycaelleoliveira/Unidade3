<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex4.php" method="get">
        <p>4.Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive). Considere que o N será sempre maior que ZERO.</p>
        Digite um valor: <input type="number" name="num">
        <input type="submit" value="Vamos lá!">
    </form>
    <?php
    if (isset($_GET['num'])) {
   $num=$_GET["num"];

for ($i=1; $i <= $num; $i++) { 
    echo $i. " , ";
}
    }
    ?>
</body>
</html>