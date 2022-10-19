<?php

$carro = array ("gol", "celta", "fox", "corola","civic");
var_dump($carro);
echo "<br/>=========<br/>"; 

$carros1[]="gol";
$carros1[]="hillux";
$carros1[]="camaro";
$carros1[]="ferrari";
$carros1[]="porche";
$carros1[]="cruze";
var_dump($carros1);

echo "<br/>=========<br/>";
echo "Eu tenho um " .$carros1[0]; // impresso um item do vetor


echo "<br/>=========<br/>";
echo "Eu tenho um " .$carro[0]; // impresso um item do vetor

// O que ocorre é o seguinte ... fazemos com que o array $car assuma o valor de cada elemento de array mais que $carro
foreach ($carro as $car) {
    // impresso todo o conteúdo do vetor
    echo "<br/>=========<br/>";
    echo $car. "<br/>";
}
?>