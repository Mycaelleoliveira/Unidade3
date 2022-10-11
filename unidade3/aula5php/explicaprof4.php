<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
       <p> Digite o período que você estuda:</p>
        <select name="periodo" >
            <option value="M"> Matutino </option>
            <option value="V"> Vespertino </option>
            <option value="N"> Noturno </option>
        </select><br/> <br/>
        <input type="submit" value="Cadastrar"/>
        
    </form>
    <?php

$periodo= $_GET["periodo"];
 
if ($periodo == "M") {
    echo "<br/> Bom dia!";
} elseif ($periodo == "V") {
    echo "<br/> Boa tarde!";
}  else {
    echo "<br/> Boa noite!";
}

    ?>

</body>
</html>