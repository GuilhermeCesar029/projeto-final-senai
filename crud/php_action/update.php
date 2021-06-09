<?php
//sessão
session_start();
//conexão
require_once 'conexao.php';

//verificando se o botão foi clicado 
if(isset($_POST['btn-editar'])): 
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $id = mysqli_real_escape_string($conexao, $_POST['id']);

    $query = "update clientes set nome = '$nome', sobrenome = '$sobrenome', email = '$email' where id = '$id'";

    if(mysqli_query($conexao, $query)): 
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:  
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../adicionar.php');
    endif;        
endif;