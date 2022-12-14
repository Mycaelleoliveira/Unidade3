<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cliente</title>
    <script>
        function excluir(id){
            if(confirm('Deseja realmente excluir este cliente?')){
                location.href='excluir.php?id='+id;
            }
        }
    </script>
</head>
<body>
    <?php
    // abrir a conexão com o banco
    include_once'./conexao.php';

    // montar a instrução para ir ao banco
    $sql = "select * from cliente";

    $result = mysqli_query($con,$sql); //executa a consulta no mysql
    
    $totalregistro= mysqli_num_rows($result);
    if ($totalregistro > 0){
        //echo "<br/> Encontrou " .$totalregistro. " registros. ";
    ?>

    <table width="800px" border="1px">
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>Data de Registro</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

    <?php   

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["telefone"]."</td>";
        echo "<td>".$row["dtcadastro"]."</td>";
        echo "<td> <a href='#'> Editar </a> </td>";
    ?>
        <td> <a href='#' onclick="excluir(<?php echo $row['idcliente']; ?>)" > Excluir </a> </td> 
        <!-- Ao clicar no excluir será chamado uma função javascript, onde perguntará se realmente quer que seja excluído ... -->

    <?php

        echo "</tr>";
    }
     echo "</table> Total Registro: " .$totalregistro;

    } else {
        echo "<br/> Nenhum registro encontrado!";
    }
    mysqli_close($con);

    ?>


</body>
</html>