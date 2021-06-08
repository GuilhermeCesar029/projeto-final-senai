<?php
require_once 'conexao.php';

//verificando se o botão foi clicado 
if(isset($_POST['btn-cadastrar'])): 
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    $query = "insert into clientes (nome, sobrenome, email) values ('$nome', '$sobrenome', '$email')";

    if(mysqli_query($conexao, $query)): 
        header('Location: ../index.php?sucesso');
    else:  
        header('Location: ../adicionar.php?erro');
    endif;        
endif;