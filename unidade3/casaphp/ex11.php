<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="post" method="ex11.php">
       <input type="number" name="peso"/>
       <button type="subimt">Calcular</button>

    </form>
    <br/>
    <?php
    $peso = $_POST[peso]

    $altura= $peso - (72.7*altura) – 58

    echo "<br/>Sua altura ideal é : " .$altura;

    ?>

</body>
</html>