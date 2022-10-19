<?php

// Crie um array com 10 números e informe a média dos números digitados

$numero = array (10,9,8,7,6,5,4,3,2,1);

$soma = 0;
//$quantidade= 10;
$contador= 0;

foreach ($numero as $n) {
    $soma += $n;
    // $soma = $soma + $n;
    echo "<br/>".$n;
    //$contador= $contador + 1;
    $contador++;
}
echo "<br/>Soma : ".$soma;
//echo "<br/>Média : ".$soma/$quantidade;
echo "<br/>Contador : ".$contador;
echo "<br/>Média : ".$soma/$contador;



?>