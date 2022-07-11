<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Produto</title>
</head>
<body>
    <?php
        include "conexao.php";
    ?>
    <h1>Cadastrar Produtos</h1>
    <form action= "cadproduto.php" method = "post" enctype="multiforms/text">
        <label>Produto:</label>
        <input type = "text" name ="nomeproduto"/><br><br>
        <label>Preço:</label>
        <input type = "decimal" name ="preco"/><br><br>
        <label>Cor:</label>
        <select name = "cor">
            <option>Selecione a cor...</option>
            <option value = "vermelho">Vermelho</option>
            <option value = "azul">Azul</option>
            <option value = "amarelo">Amarelo</option>
        </select>
        <input type="submit" value="Inserir"/>
        <a href="index.php">Voltar</a> 
    </form>
</body>
</html>