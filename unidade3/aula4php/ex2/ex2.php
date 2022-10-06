<?php

$idade= $_POST["idade"];

if($idade >=16){
    echo "Pode votar...";
} elseif($idade <=15){
    echo "Não pode votar...";
}

?>