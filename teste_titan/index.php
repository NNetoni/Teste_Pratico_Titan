<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <?php
        include "conexao.php";
    ?>
    <h1>Mostrar Produtos</h1>
    <a href="cadastrarproduto.php">Cadastrar Produto</a>
    <br><br>

    <?php
        include "conexao.php";
        
        $consultar = mysqli_query($conn,"select * from produtos");
        

        if(!$consultar){
            echo "erro na consulta";
        }else{
            echo "<table border='1'>";
            echo "<tr>
                <th>Nome do Produto</th>
                <th>Cor do Produto</th>
                <th>Preço</th>
                <th>Operações</th>
                </tr>";
                while($linha = mysqli_fetch_array($consultar)){
                    echo "<tr>
                            <td>".$linha["NOME"]."</td>
                            <td>".$linha["COR"]."</td>
                            <td>".$linha["PRECO"]."</td>
                            <td><a href= 'editarproduto.php?IDPROD=".$linha["IDPROD"]."'>Editar</a>---
                            <a href= 'deletarproduto.php?IDPROD=".$linha["IDPROD"]."'>Excluir</a></td>
                        </tr>";
                }
        }
    ?>
</body>
</html>