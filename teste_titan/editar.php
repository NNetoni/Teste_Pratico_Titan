<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $cor = $_POST["cor"];
    $idproduto = $_POST["idprod"];

    $editar = mysqli_query($conn,"update produtos set nome = '$nome',preco ='$preco',
    cor = '$cor' where idprod = '$idproduto'");

    if($editar){
        echo "<script> alert('editado com sucesso')
        location.href='index.php'</script>";
    }else{
        echo "<script> alert('erro ao editar')
        location.href='index.php'</script>";
    }
