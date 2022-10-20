<?php

// 1.Peça para o usuário digitar o nome e a nota final de 7 alunos.
// Exiba a média da turma e quais alunos possuem notas acima da média e quais estão abaixo da média.

$nomes= array("Ethan", "Mycaelle", "Joseph", "Maria", "Abel", "Nilda", "Samara");
$notas= array(2, 9, 8, 7, 6, 5, 4);
$soma=0;
$contador= 0;
$media=0;

foreach ($notas as $nota) {
  $soma += $nota;
  $contador++;
}
  $media= ceil($soma/$contador);

foreach ($notas as $chave => $nota) {
    if ($nota > $media) {
      echo " <br/>O aluno " .$nomes[$chave]. " está acima da média e sua nota é:  " .$nota;
    } elseif ($nota < $media) {
      echo " <br/>O aluno " .$nomes[$chave]. " está abaixo da média e sua nota é:  " .$nota;
    } else {
      echo " <br/>Oaluno " .$nomes[$chave]. " está na média e sua nota é:  " .$nota;
    }
   
}

echo "<br/><br/>Quantidade de alunos na turma: ".$contador;
echo "<br/><br/>Média da turma : ".$media;

?>