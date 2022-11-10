<?php include_once('cabecalho.php'); ?>
    <h2><span class="badge badge-dark">Consulta por nome</span></h2>
    <form action="consultar.php" method="post">
        Nome:<br/>
        <input type="text" placeholder="Digite seu nome" name="nome" class="btn btn-outline-dark" required/> <br/><br/>
        <input type="submit" value="Buscar" class="btn btn-dark"/><br/><br/>
    </form>
    <?php

    if(isset($_POST["nome"])){
        //pegar o campo nome
        $nome = $_POST["nome"];
    
    //abrir conexão
    include_once'./conexao.php';

    //montar s instrução sql para buscar a informação
    $sql = "select * from cliente where nome like'".$nome."%'";

    //mysqli_query() -> excuta a instrução no banco
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
    ?>

<table class="table table-bordered">
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Data de cadastro</td>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>

    <?php

    while($row = mysqli_fetch_array($result)){
        ?>
 
    <tr>
        <td><?php echo $row ["nome"]; ?></td>
        <td><?php echo $row ["email"]; ?></td>
        <td><?php echo $row ["telefone"]; ?></td>
        <td><?php echo $row ["dtcadastro"]; ?></td>
        <td>  <a href="editar.php?id=<?php echo $row["idcliente"];?>">  <img src="./img/editardois.png" alt="editar" >  </a> </td>
        <td><img src="./img/excluirdois.png" alt="excluir"></td>
    </tr>
    </table>
    <?php    
    }

    }else {
        echo "Não existe cliente com este nome.";
    }
    }
    include_once'./rodape.php';
    
?>   


