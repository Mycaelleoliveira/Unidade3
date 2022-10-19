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
    <p>1.Peça para o usuário digitar o nome e a nota final de 7 alunos.
      <br />Exiba a média da turma e quais alunos possuem notas acima da média e quais estão abaixo da média.
    </p><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    Digite o nome do aluno: <input type="text" name="nome[]"> Digite a nota do aluno: <input type="number"
      name="nota[]"><br /><br />
    <input type="submit" value="Calcular">

  </form>
  <?php
$nomes = $_POST["nome"];  
$notas = $_POST["nota"];
$soma=0;
$contador= 0;

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

 echo "<br/>Quantidade de alunos na turma: ".$contador;
 echo "<br/>Média da turma : ".$media;
 
  ?>

</body>

</html>