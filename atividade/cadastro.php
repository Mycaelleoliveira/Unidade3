<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body id="body">
    <div id="topo"></div>
    <h1 id="titulo">Produto</h1>
    <hr>
    <div id="menu">
    <form action="gravar.php" method="post"> 
        Nome do produto:<br/>
        <input type="text" name="nome" id="" ><br/><br/>
        Descrição:<br/>
        <input type="text" name="descricao" id="" ><br/><br/>
        Quantidade:<br/>
        <input type="text" name="quantidade" id="" ><br/><br/>
        Valor:<br/>
        <input type="text" name="valor" id="" ><br/><br/>
        Fornecedor:<br/>
        <input type="text" name="fornecedor" id="" ><br/><br/>
        <input type="submit" value="Cadastrar">
    </form>
    </div>
    <div id="rodape"></div>    
</body>
</html>


