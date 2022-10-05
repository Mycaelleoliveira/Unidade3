<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <!--Entrada-->
    <form action="ex1.php" method="get">
        nome: <br/>
        <input type="text" name="nome" placeholder="Digite seu nome"/> <br/> <br/>
        <input type="submit" value="ENVIAR"/> 
    </form>
    <?php
    
      $nome = $_GET["nome"];

    echo"nome : ".$nome;
    ?>
</body>
</html>