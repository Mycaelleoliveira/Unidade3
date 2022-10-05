<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="ex8.php" method="post">
        Temperatura em Celsius: 
        <input type="text" name="C"><br>
        <input type="submit" value="Converter">
   </form>
 
    <?php 
      $C = $_POST['C'];
      $F = (9/5)*$C + 32;  
    
      echo "Em Farenheit: $F <br /><br />";
      
 ?>

</body>
</html>