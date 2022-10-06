<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex13.php" method="post">
    <p>João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu
      trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de
      São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. João precisa que você faça um script
      que leia a variável peso (peso de peixes) e calcule o excesso. Gravar na variável excesso a quantidade de quilos
      além do limite e na variável multa o valor da multa que João deverá pagar. Imprima os dados do script com as
      mensagens adequadas.</p>
    <input type="name" name="peso" />
    <button type="submit"> Calcular</button>
  </form>
  <?php
  $peso= $_POST["peso"];

  $excedente= $peso - 50;

  $multa = $excedente * 4;

  echo "<br/>O valor da sua multa é : " .$multa;

  ?>
</body>

</html>