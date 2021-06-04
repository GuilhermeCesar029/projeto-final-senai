<?php
session_start();

//Se a sessao do usuario não existir retorna para a index(pagina de login)
if(!$_SESSION['usuario']) {
    header('Location: index.php');
    exit();
}