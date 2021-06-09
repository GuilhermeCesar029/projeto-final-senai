<?php
//sessão
session_start();
//conexão
require_once 'conexao.php';

//verificando se o botão foi clicado 
if(isset($_POST['btn-cadastrar'])): 
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    $query = "insert into clientes (nome, sobrenome, email) values ('$nome', '$sobrenome', '$email')";

    if(mysqli_query($conexao, $query)): 
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:  
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../adicionar.php');
    endif;        
endif;