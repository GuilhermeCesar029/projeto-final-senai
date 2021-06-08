<?php 
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Adicionar Clientes</h3>
        <form action="">
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

            <button type="submit" class="btn">Enviar</button>
            <button type="submit" class="btn orange">Voltar</button>
        </form>
    </div>  
</div>

<?php
include_once 'includes/footer.php';
?>


