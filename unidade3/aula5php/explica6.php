<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
	<p>Calcule e mostre o total do seu salário no referido mês:</p>
	Digite seu salário por hora: <input type="number" name="salario" /><br /><br />
	Quantas horas você trabalha no mês: <input type="number" name="horas" /><br /><br />
	<input type="submit" value="Calcular"> <br />

  </form>

  <?php
 
	$salario = $_POST["salario"];
	$horas = $_POST["horas"];
	$salario_total = $salario * $horas;

	$sindicato= ( 3/ 100) * $salario_total;
	$fgts = (11/100) * $salario_total;
	$inss = (10/100) * $salario_total;

	if ($salario_total <= 900) {
  	$faixa_ir = 0;
	} elseif ($salario_total <= 1500) {
  	$faixa_ir = 5;
	} elseif ($salario_total <= 2500) {
  	$faixa_ir = 10;
	} else {
  	$faixa_ir = 20;
	}
    
	$ir = ($faixa_ir/100) * $salario_total;

	$descontos = $sindicato + $inss + $ir;
	$salario_liquido = $salario_total - $descontos;

	echo "<br/>Salário Bruto: ".$horas." * ".$salario." : R$ " .$salario_total. "<br />
    	IR ".$faixa_ir." %: R$  ".$ir." <br />
    	INSS (10%) : R$ ".$inss." <br />
    	FGTS (11%) : R$ ".$fgts." <br />
    	Total de descontos: R$ ".$descontos."
    	<br/> Salário Liquido : R$" .$salario_liquido;

 

  ?>
</body>

</html>
