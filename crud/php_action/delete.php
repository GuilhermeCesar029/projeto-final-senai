<?php
//sessão
session_start();
//conexão
require_once 'conexao.php';

//verificando se o botão foi clicado 
if(isset($_POST['btn-deletar'])): 
    $id = mysqli_real_escape_string($conexao, $_POST['id']);

    $query = "delete from clientes where id = '$id'";

    if(mysqli_query($conexao, $query)): 
        $_SESSION['mensagem'] = "Apagado com sucesso!";
        header('Location: ../index.php');
    else:  
        $_SESSION['mensagem'] = "Erro ao Apagar!";
        header('Location: ../adicionar.php');
    endif;        
endif;