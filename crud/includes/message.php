<?php
//Verificando se existe mensagem na sessão
if(isset($_SESSION['mensagem'])): ?>
    
    <script>
    //carregando função depois de toda a pagina 
    window.onload = function() {
        //Exibindo a mensagem
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    };
</script>

<?php    
endif;
//removendo a sessao de mensagem
unset($_SESSION['mensagem']);
?>