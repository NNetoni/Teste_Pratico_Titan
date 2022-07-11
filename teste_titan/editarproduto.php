<?php
    include "conexao.php";

    echo "<meta charset = 'utf-8'>";

    $produto = $_GET["IDPROD"];

    echo "Editar Informações<br>";

    $consultar = mysqli_query($conn,"select * from produtos where idprod = '$produto'");

    echo "<form action = 'editar.php' method=post>";

    while($linha = mysqli_fetch_array($consultar)){
        echo "<input type='hidden' name='idprod' value='".$linha["IDPROD"]."'><br>";

        echo "<label>Produto:</label>
        <input type='text' name='nome' value='".$linha["NOME"]."' required><br>";
        
        echo "<label>Preço:</label>
        <input type='text' name='preco' value='".$linha["PRECO"]."' required><br>";

        echo "<label>Cor:</label>
        <input type='text' name='cor' value='".$linha["COR"]."' required readonly><br>";

        echo "<input type='submit' value='Editar'>";
    }
    echo "</form>";
?>