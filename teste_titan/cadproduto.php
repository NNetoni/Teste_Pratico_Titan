<?php
    
    include "conexao.php";
    
    $nomeproduto= $_POST["nomeproduto"];
    $preco= $_POST["preco"];
    $preco= str_replace(",",".",$preco);

    $cor= "";

    if($_POST["cor"]=="vermelho"){
        $cor= "vermelho";
    }   
    
    if($_POST["cor"]=="azul"){
        $cor= "azul";
    }

    if($_POST["cor"]=="amarelo"){
        $cor= "amarelo";
    }

    $cadastrar = mysqli_query($conn,"insert into produtos
    (NOME,COR,PRECO) values 
    ('$nomeproduto','$cor','$preco')");



    if($cadastrar){
        echo "<script> alert('Cadastrado com sucesso')
        location.href='index.php'</script>";
    }else{
        echo "<script> alert('erro ao cadastrar')
        location.href='index.php'</script>";
    }


?>