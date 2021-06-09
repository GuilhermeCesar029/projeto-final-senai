<?php 
include_once 'includes/header.php';

//incluindo arquivo de verificação do login
include('../login/verifica_login.php');
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Adicionar Clientes</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Enviar</button>
            <a href="index.php"  class="btn orange">Voltar</a>
        </form>
    </div>  
</div>

<?php
include_once 'includes/footer.php';
?>


