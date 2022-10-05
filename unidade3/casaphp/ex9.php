<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex9.php" method="post">
        Temperatura em Farenheit : 
        <input type="text" name="F"><br>
        <input type="submit" value="transformar">
    </form>

    <?php 
     $F = $_POST['F'];
     $C = ($F-32)*5/9;  
    
     echo "Em Celsius: .$C";
     ?>
     
</body>
</html>