<?php 
//conexão
include_once 'php_action/conexao.php';
//incluindo arquivo de verificação do login
include_once '../login/verifica_login.php';
//header
include_once 'includes/header.php';
//select 
if(isset($_GET['id'])): 
    $id = mysqli_escape_string($conexao, $_GET['id']);

    $query = "select * from clientes where id = '$id'";
    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_fetch_array($resultado);
endif;    
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Editar Cliente</h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Enviar</button>
            <a href="index.php"  class="btn orange">Voltar</a>
        </form>
    </div>  
</div>

<?php
include_once 'includes/footer.php';
?>


