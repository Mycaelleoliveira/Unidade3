<?php

$x=5;

echo "<br/> Valor de x : " .$x; //5
$x++;
echo "<br/> Valor de x : " .$x; //6
$y = ++$x; // x=7 primeiro incrementa
echo "<br/> Valor de x : " .$x; // 7
echo "<br/> Valor de y : " .$y; // 7
echo "<br/> =============== <br/> "; 

$z = 5;

echo "<br/> Valor de z : " .$z; // 5
$z++; // primeiro incrementa 6
echo "<br/> Valor de z : " .$z; // 6
$w = $z++; // w= atribui depor incrementa
echo "<br/> Valor de z : " .$z; 
echo "<br/> Valor de w : " .$w;


?>