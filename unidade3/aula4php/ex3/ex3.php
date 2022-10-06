<?php

$idade= $_POST["idade"];

if($idade < 16){
    echo "Não pode votar...";
} elseif($idade < 18){
    echo "Seu voto é facultativo...";
} elseif($idade <=70){
    echo "Voto obrigatório...";
} else{
    echo "Voto facultativo...";
}

?>