<?php
    include "conexao.php";

    $idproduto = $_GET["IDPROD"];

    $editar = mysqli_query($conn,"delete from produtos where idprod = '$idproduto'");

    if($editar){
        echo "<script> alert('deletado com sucesso')
        location.href='index.php'</script>";
    }else{
        echo "<script> alert('erro ao deletar')
        location.href='index.php'</script>";
    }
?>