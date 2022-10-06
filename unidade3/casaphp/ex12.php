<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex12.php" method="post">
    <p>Tendo como dado de entrada a altura (h) de uma pessoa, construa um script que calcule seu peso ideal,
      utilizando as seguintes fórmulas: Para homens: (72.7*h) - 58 e Para mulheres: (62.1*h) - 44.7 </p>
    <select name="sexo">
      <option value="homem">homem</option>
      <option value="mulher">mulher</option>
    </select>
    <input type="text" name="altura" />
    <button type="submit"> Calcular</button>
  </form>
  <br />
  <?php
   $sexo= $_POST["sexo"];
   $altura= $_POST["altura"];

   if($sexo=="homem") {
    $peso = (72.7*$altura) - 58;
   } elseif($sexo=="mulher") {
    $peso = (62.1*$altura) - 44.7;
   }

   echo "<br/>Seu peso ideal é : " .$peso;
    

  ?>
</body>

</html>