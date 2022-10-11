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
	<p>Vamos saber sua média?</p>
	1° nota: <input type="text" name="nota1"><br /><br />
	2° nota: <input type="text" name="nota2"><br /><br />
	<input type="submit" value="Calcular">
  </form>
  <?php
  $nota1= $_GET["nota1"];
  $nota2= $_GET["nota2"];

  $media= ($nota1 + $nota2) /2;
if ($media >9 && $media <=10) {
    	echo "<br/> Sua 1° nota : " .$nota1. " com sua 2° nota : " .$nota2. " lhe deu uma média de : " .$media. " com conceito A e você está APROVADO!";
	} elseif ($media >7.5 && $media<=9) {
    	echo "<br/> Sua 1° nota : " .$nota1. " com sua 2° nota : " .$nota2. " lhe deu uma média de : " .$media. " com conceito B e você está APROVADO!";
	} elseif ($media >6 && $media<=7.5) {
    	echo "<br/> Sua 1° nota : " .$nota1. " com sua 2° nota : " .$nota2. " lhe deu uma média de : " .$media. " com conceito C e você está APROVADO!";
	}   elseif ($media >4 && $media<=6) {
  	echo "<br/> Sua 1° nota : " .$nota1. " com sua 2° nota : " .$nota2. " lhe deu uma média de : " .$media. " com conceito D e você está REPROVADO!";
	} else {
    	echo "<br/> Sua 1° nota : " .$nota1. " com sua 2° nota : " .$nota2. " lhe deu uma média de : " .$media. " com conceito E e você está REPROVADO!";
	}


  ?>
</body>

</html>
