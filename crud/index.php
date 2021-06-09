<?php
//conexão
include_once 'php_action/conexao.php';

//header
include_once 'includes/header.php';
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

                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>                                
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>


