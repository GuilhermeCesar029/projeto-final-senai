<?php 
session_start();
include('../crud/php_action/conexao.php');

//Validação, só pode ir para a pagina de login se os inputs não forem fazios.
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

//protejendo contra ataques de sql injection
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//verificando se o usuario digitado é igual o do banco 
$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

//executando a query no banco de dados
$result = mysqli_query($conexao, $query);

//exibindo a quantidade de linha exibida pela query 
$row = mysqli_num_rows($result);  

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../crud/index.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true; //quando o usuario não for autenticado.
    header('Location: index.php');
    exit();
}