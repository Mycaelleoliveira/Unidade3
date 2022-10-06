<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex14.php" method="post">
    <p>Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de
      Renda, 8% para o INSS e 5% para o sindicato, faça um script que nos dê:</p>
    <input type="number" name="salario" />
    <button type="submit">Calcular</button>

  </form>
  <?php
  $salario= $_POST["salario"];

  $ir= (11 / 100 ) * $salario;
  $inss= (8 / 100) * $salario;
  $sindicato= ( 5/ 100) * $salario;
  $liquido= $salario - $ir - $inss - $sindicato;

echo "<br/>Seu salario é : " .$salario;
echo "<br/>Seu desconto no ir é : " .$ir;
echo "<br/>Seu desconto no inss é : " .$inss;
echo "<br/>Seu desconto com sindicato é : " .$sindicato;
echo "<br/>Seu salario liquido é : " .$liquido;

  ?>
</body>

</html>