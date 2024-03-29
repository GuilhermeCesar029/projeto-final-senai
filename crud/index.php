<?php
//incluindo arquivo de verificação do login
include_once '../login/verifica_login.php';    
//conexão
include_once 'php_action/conexao.php';
//header
include_once 'includes/header.php';
//mensagem
include_once 'includes/message.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Lista de Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Ação</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "select * from clientes";
                    $resultado = mysqli_query($conexao, $query);

                    //Verificando se existe clientes
                    if(mysqli_num_rows($resultado) > 0):

                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>    

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                            <h4>Opa!</h4>
                            <p>Desaja excluir este cliente?</p>
                        </div>
                        <div class="modal-footer">                            
                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero apagar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                        </div>
                    </div>

                </tr>
                <?php 
                    endwhile; 
                    else: 
                ?>
                <tr>
                    <td colspan="4"><strong>Nao existe registros!</strong></td>
                </tr>
                <?php
                    endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>


